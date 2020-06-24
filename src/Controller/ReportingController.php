<?php

namespace App\Controller;

use App\Entity\Reporting;
use App\Form\ReportingType;
use App\Repository\ReportingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reporting")
 */
class ReportingController extends AbstractController
{
    /**
     * @Route("/", name="reporting_index", methods={"GET"})
     */
    public function index(ReportingRepository $reportingRepository): Response
    {
        return $this->render('reporting/index.html.twig', [
            'reportings' => $reportingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reporting_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reporting = new Reporting();
        $form = $this->createForm(ReportingType::class, $reporting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reporting);
            $entityManager->flush();

            return $this->redirectToRoute('reporting_index');
        }

        return $this->render('reporting/new.html.twig', [
            'reporting' => $reporting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reporting_show", methods={"GET"})
     */
    public function show(Reporting $reporting): Response
    {
        return $this->render('reporting/show.html.twig', [
            'reporting' => $reporting,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reporting_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reporting $reporting): Response
    {
        $form = $this->createForm(ReportingType::class, $reporting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reporting_index');
        }

        return $this->render('reporting/edit.html.twig', [
            'reporting' => $reporting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reporting_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reporting $reporting): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reporting->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reporting);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reporting_index');
    }
}
