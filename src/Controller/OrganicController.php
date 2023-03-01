<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganicController extends AbstractController
{
    /**
     * @Route("/organic", name="app_organic")
     */
    public function index(): Response
    {
        return $this->render('organic/index.html.twig', [
            'controller_name' => 'OrganicController',
        ]);
    }
}
