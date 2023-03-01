<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DigitalArenaController extends AbstractController
{
    /**
     * @Route("/digitalarena", name="app_digital_arena")
     */
    public function index(): Response
    {
        return $this->render('digital_arena/index.html.twig', [
            'controller_name' => 'DigitalArenaController',
        ]);
    }
}
