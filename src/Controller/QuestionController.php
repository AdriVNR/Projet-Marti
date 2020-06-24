<?php

namespace App\Controller;
use App\Entity\Response as eResponse;
use App\Entity\Question;
use App\Entity\Translation;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ResponseType;
use App\Service\GenerateCode;
use App\Form\TranslationFromQuestionType;
use App\Repository\TranslationRepository;
use App\Repository\CultureRepository;
use App\Repository\ResponseRepository;

/**
 * @Route("/question")
 */
class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="question_index", methods={"GET"})
     */
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('question/index.html.twig', [
            'questions' => $questionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="question_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        // Champs de formulaire :
        // Translation: culture, phrase, vocal, image
        // Question: code, duplicable, layout

        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        $translation = new Translation();
        $translationForm = $this->createForm(TranslationFromQuestionType::class, $translation);
        $translationForm->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid() && $translationForm->isValid() && $translationForm->isSubmitted() ) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);

            $translation->setCode($question->getCode());
            $entityManager->persist($translation);
            $entityManager->flush();

            return $this->redirectToRoute('question_index');
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
            'translationForm' => $translationForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="question_show", methods={"GET", "POST"})
     */
    public function show(Request $request, Question $question, 
                            TranslationRepository $translationRepository,
                            CultureRepository $cultureRepository,
                            ResponseRepository $responseRepository
                            ): Response
    {

        // Champs de formulaire :
        // Translation: culture, phrase, vocal, image
        // Response: code, trig, value 

        /** Formulaire Response */
        $translation = new Translation();
        $translationForm = $this->createForm(TranslationFromQuestionType::class, $translation);
        $translationForm->handleRequest($request);

        $response = new eResponse();
        $responseForm = $this->createForm(ResponseType::class, $response);
        $responseForm->handleRequest($request);

        // if ($translationForm->isSubmitted()  
        //         && $responseForm->isSubmitted()  ) {

        if ($request->isMethod('POST') && $translationForm->isValid() && $responseForm->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();

            // 0. La Reponse vient du form avec les champs remplis par l'user : trig et value, on doit ajouter le code

            $entityManager->persist($response);
            $entityManager->flush();
            
            // 1. On ajoute à la réponse le code généré
            $generator = new GenerateCode();
            $response->setCode($generator->generate( $response->getId() ));


            // 2. La Translation vient du form avec les champs remplis suivants: phrase, vocal, image, culture
            // On ajoute le code et la culture
            $translation->setCode( $response->getCode() );

            $question->addResponse($response);

            $entityManager->persist($translation);
            $entityManager->flush();

            return $this->redirectToRoute('question_show', ['id' => $question->getId() ]);
        }

        $cultureFr = $cultureRepository->findOneBy([
            'locale' => 'fr-FR',
        ]);

        $translationForView = $translationRepository->findOneBy([
            'code' => $question->getCode(),
            'culture' => $cultureFr
        ]);

        
        $responsesTranslationsFr = [];
        
        foreach($question->getResponses() as $response) {
            $cultureFr = $cultureRepository->findOneBy([
                'locale' => 'fr-FR',
            ]);

            $translationFr = $translationRepository->findOneBy([
                'code' => $response->getCode(),
                'culture' => $cultureFr
            ]);

            $responsesTranslationsFr[ $response->getCode() ] = $translationFr->getPhrase();
        }

        return $this->render('question/show.html.twig', [
            'question' => $question,
            'response' => $response,
            'translation'=> $translationForView,
            'responsesTranslationsFr' => $responsesTranslationsFr,
           // 'translationResponse' => $translationForResponse,
            'translationForm' => $translationForm->createView(),
            'responseForm' => $responseForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Question $question): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('question_index');
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="question_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }
}
