<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController
{
    #[Route("/api/cards", name: "api_cards")]
    public function cards(): Response
    {
        $deck = [
            ["suit" => "spades", "value" => "Ace", "imgPath" => "spades_Ace.svg"],
            ["suit" => "spades", "value" => "2", "imgPath" => "spades_2.svg"],
            ["suit" => "spades", "value" => "3", "imgPath" => "spades_3.svg"],
            ["suit" => "spades", "value" => "4", "imgPath" => "spades_4.svg"],
            ["suit" => "spades", "value" => "5", "imgPath" => "spades_5.svg"],
            ["suit" => "spades", "value" => "6", "imgPath" => "spades_6.svg"],
            ["suit" => "spades", "value" => "7", "imgPath" => "spades_7.svg"],
            ["suit" => "spades", "value" => "8", "imgPath" => "spades_8.svg"],
            ["suit" => "spades", "value" => "9", "imgPath" => "spades_9.svg"],
            ["suit" => "spades", "value" => "10", "imgPath" => "spades_10.svg"],
            ["suit" => "spades", "value" => "Jack", "imgPath" => "spades_Jack.svg"],
            ["suit" => "spades", "value" => "Queen", "imgPath" => "spades_Queen.svg"],
            ["suit" => "spades", "value" => "King", "imgPath" => "spades_King.svg"]
        ];

        // Extend the deck with other suits: hearts, diamonds, clubs
        foreach (['hearts', 'diamonds', 'clubs'] as $suit) {
            foreach (['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'] as $value) {
                $deck[] = ["suit" => $suit, "value" => $value, "imgPath" => "{$suit}_{$value}.svg"];
            }
        }

        return new JsonResponse($deck);
    }
}


