<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/coza")
 */

class CozaController extends AbstractController
{
    /**
     * @Route("/coza", name="coza")
     */
    public function index(): Response
    {
        return $this->render('coza/index.html.twig', [
            'controller_name' => 'CozaController',
        ]);
    }

    /**
     * @Route("/product", name="product")
     */
    public function product(): Response
    {
        return $this->render('coza/product.html', [
            'controller_name' => 'CozaController',
        ]);
    }
}
