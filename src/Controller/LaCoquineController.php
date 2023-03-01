<?php

namespace App\Controller;

use App\Entity\LaCoquine;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LaCoquineController extends AbstractController
{
    /**
     * @Route("/lacoquine", name="app_lacoquine")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine->getRepository(LaCoquine::class)->findAll();
        return $this->render('la_coquine/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/lacoquine/{id}", name="lacoquine_show", requirements={"id"="\d+"})
     */
    public function show($id, ManagerRegistry $doctrine): Response 
    {
        $product = $doctrine->getRepository(LaCoquine::class)->find($id);
        return $this->render('la_coquine/show.html.twig',[
        ]);
    }
}
