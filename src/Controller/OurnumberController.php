<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OurnumberController extends AbstractController
{
    #[Route('/ournumber', name: 'app_ournumber')]
    public function index(): Response
    {
        return $this->render('ournumber/index.html.twig', [
            'controller_name' => 'OurnumberController',
        ]);
    }
}
