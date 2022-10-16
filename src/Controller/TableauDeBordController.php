<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableauDeBordController extends AbstractController
{
    #[Route('/', name: 'tableau_de_bord')]
    public function index(): Response
    {
        return $this->render('tableau_de_bord/index.html.twig', [
            'controller_name' => 'TableauDeBordController',
        ]);
    }
}
