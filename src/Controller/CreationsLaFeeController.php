<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationsLaFeeController extends AbstractController
{
    /**
     * @Route("/creationslafee", name="app_creations_la_fee")
     */
    public function index(): Response
    {
        return $this->render('creations_la_fee/index.html.twig', [
            'controller_name' => 'CreationsLaFeeController',
        ]);
    }
}
