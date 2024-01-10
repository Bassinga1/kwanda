<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmergencyController extends AbstractController
{
    #[Route('/emergency', name: 'app_emergency')]
    public function index(): Response
    {
        return $this->render('emergency/index.html.twig', [
            'controller_name' => 'EmergencyController',
        ]);
    }
}
