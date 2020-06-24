<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Translation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page")
     */
    public function index()
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/sk")
     */
    public function Kestion(){
        return $this->render('page/index.html.twig',[
            'translation', EntityType::class,[
                'class'=>Translation::class,
                'choice_label'=>'phrase'
            ]

        ]);
    }
}
