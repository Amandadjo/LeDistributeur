<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LesPetitsPotsController extends AbstractController
{
    /**
     * @Route("/lespetitspots", name="app_les_petits_pots")
     */
    public function index(): Response
    {
        return $this->render('les_petits_pots/index.html.twig', [
            'controller_name' => 'LesPetitsPotsController',
        ]);
    }
}
