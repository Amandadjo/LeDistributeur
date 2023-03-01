<?php

namespace App\Controller;

use App\Entity\Nouveaute;
use App\Entity\IdeesCadeaux;
use App\Entity\MarcheArtisanal;
use App\Entity\PromotionCategories;
use App\Entity\TopVente;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $promotion_categories = $doctrine->getRepository(PromotionCategories::class)->findAll();
        $marche_artisanal = $doctrine->getRepository(MarcheArtisanal::class)->findAll();
        $top_vente = $doctrine->getRepository(TopVente::class)->findAll();
        $idees_cadeaux = $doctrine->getRepository(IdeesCadeaux::class)->findAll();
        $nouveaute = $doctrine->getRepository(Nouveaute::class)->findAll();

        return $this->render('home/index.html.twig', [
            'promotion_categories' => $promotion_categories,
            'marche_artisanals' => $marche_artisanal,
            'top_ventes' => $top_vente,
            'idees_cadeaux' => $idees_cadeaux,
            'nouveautes' => $nouveaute
        ]);
    }

}
