<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YeyeCreationsController extends AbstractController
{
    /**
     * @Route("/yeyecreations", name="app_yeye_creations")
     */
    public function index(): Response
    {
        return $this->render('yeye_creations/index.html.twig', [
            'controller_name' => 'YeyeCreationsController',
        ]);
    }
}
