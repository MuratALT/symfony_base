<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/burger', name: 'burger_')]
class BurgerController extends AbstractController
{
    #[Route('/liste', name: 'app_burger')]
    public function list(): Response
    {
        $burgers = [
            [
                "name" => "Big Mac",
                "price" => 5.99,
                "description" => "Le Big Mac est un hamburger vendu par l'entreprise américaine de restauration rapide McDonald's. Il a été créé en 1967 par le franchisé de Pittsburgh Jim Delligatti en réponse à la demande de sandwichs plus grands de la part des joueurs de football américain locaux.",
            ],
            [
                "name" => "Cheeseburger",
                "price" => 2.99,
                "description" => "Le cheeseburger est un hamburger garni d'une ou plusieurs tranches de fromage fondu. Il est généralement préparé avec du cheddar ou de l'emmental.",
            ]
        ];

        return $this->render('burger/list.html.twig', [
            'controller_name' => 'BurgerController',
            'burgers' => $burgers
        ]);
    }
}
