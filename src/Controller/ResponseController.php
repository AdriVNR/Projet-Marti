<?php

namespace App\Controller;

use App\Entity\Response as EResponse;
use App\Form\ResponseType;
use App\Repository\ResponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\QuestionFromResponseType;

/**
 * @Route("/response")
 */
class ResponseController extends AbstractController
{
    /**
     * @Route("/", name="response_index", methods={"GET"})
     */
    public function index(ResponseRepository $responseRepository): Response
    {
        return $this->render('response/index.html.twig', [
            'responses' => $responseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="response_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $response = new EResponse();
        $form = $this->createForm(ResponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($response);
            $entityManager->flush();

            return $this->redirectToRoute('response_index');
        }

        return $this->render('response/new.html.twig', [
            'response' => $response,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="response_show", methods={"GET", "POST"})
     */
    public function show(Request $request, EResponse $response): Response
    {


        $questionForm = $this->createForm(QuestionFromResponseType::class, $response);
        $questionForm->handleRequest($request);

        if ($questionForm->isSubmitted() && $questionForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($response);
            $entityManager->flush();

            return $this->redirectToRoute('response_show', ['id' => $response->getId() ]);
        }

        return $this->render('response/show.html.twig', [
            'response' => $response,
            'questionForm' => $questionForm->createView()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="response_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EResponse $response): Response
    {
        $form = $this->createForm(ResponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('response_index');
        }

        return $this->render('response/edit.html.twig', [
            'response' => $response,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="response_delete", methods={"DELETE"})
     */
    public function delete(Request $request, EResponse $response): Response
    {
        if ($this->isCsrfTokenValid('delete'.$response->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($response);
            $entityManager->flush();
        }

        return $this->redirectToRoute('response_index');
    }
}
