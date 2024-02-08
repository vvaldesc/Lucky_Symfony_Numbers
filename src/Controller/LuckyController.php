<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    public function index(): Response
    {
        return $this->render('lucky/index.html.twig', [
            'number' => 'LuckyController',
        ]);
    }
}
