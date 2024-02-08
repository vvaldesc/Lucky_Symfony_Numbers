<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerPhpController extends AbstractController
{
    #[Route('/lucky/controller/php', name: 'app_lucky_controller_php')]
    public function index(): Response
    {
        return $this->render('lucky_controller_php/index.html.twig', [
            'lucky' => random_int(0, 100),
        ]);
    }
}
