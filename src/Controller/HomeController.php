<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; 

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')] // On met '/' pour que ce soit la page par défaut
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
    #[Route('/en-savoir-plus', name: 'app_about_more')]
public function aboutMore(): Response
{
    
    return $this->render('home/about_more.html.twig');
}

    #[Route('/competences', name: 'app_competences')]
    public function competences(): Response
    {
        return $this->render('home/competences.html.twig');
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('home/cv.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }
    #[Route('/presentation', name: 'app_presentation')]
public function presentation(): Response
{
    return $this->render('home/presentation.html.twig');
}
}
