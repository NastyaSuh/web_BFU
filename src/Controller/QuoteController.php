<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\QuoteRepository;


class QuoteController extends AbstractController
{
    /**
     * @Route("/quote", name="app_quote")
     */
    public function index(QuoteRepository $quoteRepository): Response
    {
        return $this->render('quote/index.html.twig', [
			'quotes' => $quoteRepository->findAll(),
        ]);
    }
}
