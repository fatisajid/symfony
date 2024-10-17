<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            
        ]);
    }
    #[Route('/bonjour', name: 'app_bonjour')]
    public function bonjour(): Response {
        return new Response('Bienvenue dans bonjour! ');
    }

    #[Route('article/{id}', name: 'app_single_article', defaults: ['id' => 'tous les article'])]
    public function showArticle($id){
        return new Response("l'identifiant est : " . $id);

    }
    
}
