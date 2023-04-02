<?php

namespace App\Controller;

use App\Entity\AttitudeManStore;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttitudeManStoreController extends AbstractController
{
    /**
     * @Route("/attitude-man-store", name="app_attitudemanstore")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine->getRepository(AttitudeManStore::class)->findAll();
        return $this->render('attitude_man_store/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/attitudemanstore/{id}", name="attitudemanstore_show", requirements={"id"="\d+"})
     */
    public function show($id, ManagerRegistry $doctrine): Response
     {
        $product = $doctrine->getRepository(AttitudeManStore::class)->find($id);
        return $this->render('attitude_man_store/show.html.twig', [
            'product' => $product,
        ]);
     }
}
