<?php

namespace App\Controller;

use App\Entity\Culture;
use App\Form\CultureType;
use App\Repository\CultureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;



/**
 * @Route("/culture")
 */
class CultureController extends AbstractController
{
    /**
     * @Route("/", name="culture_index", methods={"GET"})
     */
    public function index(CultureRepository $cultureRepository): Response
    {
        return $this->render('culture/index.html.twig', [
            'cultures' => $cultureRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="culture_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $culture = new Culture();
        $form = $this->createForm(CultureType::class, $culture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $flagFile = $form['flag']->getData();
            
            $originalFilename = pathinfo($flagFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $form['locale']->getData() . '.' . $flagFile->guessExtension();


            $flagFile->move($this->getParameter('flags_directory'),$newFilename);
            $entityManager = $this->getDoctrine()->getManager();
            $culture->setFlag($newFilename);
            $entityManager->persist($culture);
            $entityManager->flush();

            return $this->redirectToRoute('culture_index');
        }

        return $this->render('culture/new.html.twig', [
            'culture' => $culture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="culture_show", methods={"GET"})
     */
    public function show(Culture $culture): Response
    {
        return $this->render('culture/show.html.twig', [
            'culture' => $culture,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="culture_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Culture $culture): Response
    {
        $form = $this->createForm(CultureType::class, $culture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('culture_index');
        }

        return $this->render('culture/edit.html.twig', [
            'culture' => $culture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="culture_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Culture $culture): Response
    {
        if ($this->isCsrfTokenValid('delete'.$culture->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($culture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('culture_index');
    }
}
