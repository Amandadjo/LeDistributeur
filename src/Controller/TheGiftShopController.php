<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheGiftShopController extends AbstractController
{
    /**
     * @Route("/thegiftshop", name="app_the_gift_shop")
     */
    public function index(): Response
    {
        return $this->render('the_gift_shop/index.html.twig', [
            'controller_name' => 'TheGiftShopController',
        ]);
    }
}
