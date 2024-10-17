<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaskController extends AbstractController
{
    #[Route('/task', name: 'app_task')]
    public function index(): Response
    {
        $tasks = [
            ['title' => 'Acheter du pain', 'completed' => false],
            ['title' => 'Finir le projet Symfony', 'completed' => true],
            ['title' => 'Appeler le médecin pour un rendez-vous', 'completed' => false],
            ['title' => 'Faire du sport', 'completed' => true],
            ['title' => 'Lire un livre sur les bonnes pratiques en développement', 'completed' => false],
        ];
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
            "tasks" => $tasks
        ]);
    }
}
