<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Asset\Package; 

final class EportfolioController extends AbstractController
{
    #[Route('/eportfolio', name: 'app_eportfolio')]
    public function index(): Response
    {
        dump($this->getParameter('kernel.project_dir') . '/public/images/image_ni.jpeg');
        return $this->render('eportfolio/index.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }

    #[Route('/eportfolio/passions', name: 'app_eportfolio_passions')]
    public function passions(): Response
    {
        return $this->render('eportfolio/passions.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
    #[Route('/eportfolio/CV', name: 'app_eportfolio_CV')]
    public function CV(): Response
    {
        return $this->render('eportfolio/CV.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
    #[Route('/eportfolio/formulaire', name: 'app_eportfolio_formulaire')]
    public function comp(): Response
    {
        return $this->render('eportfolio/formulaire.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
    #[Route('/eportfolio/portfolio', name: 'app_eportfolio_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('eportfolio/portfolio.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
    #[Route('/eportfolio/parcours', name: 'app_eportfolio_parcours')]
    public function parcours(): Response
    {
        return $this->render('eportfolio/parcours.html.twig', [
            'controller_name' => 'EportfolioController',
        ]);
    }
}

