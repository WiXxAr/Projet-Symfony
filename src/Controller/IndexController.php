<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="base")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'produits' => $produitRepository->findAll(),
        ]);
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('index/connexion.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }


    /**
    * @Route("/femme", name="femme")
    */

    public function femme(ProduitRepository $produitRepository): Response
    {
        return $this->render('index/femme.html.twig', [
            'controller_name' => 'IndexController',
            'produits' => $produitRepository->findBy(["categorie" =>2]),
        ]);
    }
    /**
    * @Route("/enfant", name="enfant")
    */

    public function enfant(ProduitRepository $produitRepository): Response
    {
        return $this->render('index/enfant.html.twig', [
            'controller_name' => 'IndexController',
            'produits' => $produitRepository->findBy(["categorie" =>3]),
        ]);
    }

    /**
     * @Route("/homme", name="homme")
     */

    public function homme(ProduitRepository $produitRepository): Response
    {
        return $this->render('index/homme.html.twig', [
            'controller_name' => 'IndexController',
            'produits' => $produitRepository->findBy(["categorie" =>1]),
        ]);
    }

    /**
    * @Route("/promotions", name="promotions")
    */
    public function promotions(): Response
    {
        return $this->render('index/promotions.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
    * @Route("/panier", name="panier")
    */
    public function panier(): Response
    {
        return $this->render('index/panier.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }





}
