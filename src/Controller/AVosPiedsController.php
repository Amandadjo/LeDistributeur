<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AVosPiedsController extends AbstractController
{
    /**
     * @Route("/avospieds", name="app_a_vos_pieds")
     */
    public function index(): Response
    {
        return $this->render('a_vos_pieds/index.html.twig', [
            'controller_name' => 'AVosPiedsController',
        ]);
    }
}
