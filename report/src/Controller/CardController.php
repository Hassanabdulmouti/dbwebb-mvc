<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController
{
    #[Route("/api/deck", name: "api_deck")]
    public function cards(): Response
    {
        $deck = [
            ["suit" => "spades", "value" => "Ace", "imgPath" => "spades_ace.svg"],
            ["suit" => "spades", "value" => "2", "imgPath" => "spades_2.svg"],
            ["suit" => "spades", "value" => "3", "imgPath" => "spades_3.svg"],
            ["suit" => "spades", "value" => "4", "imgPath" => "spades_4.svg"],
            ["suit" => "spades", "value" => "5", "imgPath" => "spades_5.svg"],
            ["suit" => "spades", "value" => "6", "imgPath" => "spades_6.svg"],
            ["suit" => "spades", "value" => "7", "imgPath" => "spades_7.svg"],
            ["suit" => "spades", "value" => "8", "imgPath" => "spades_8.svg"],
            ["suit" => "spades", "value" => "9", "imgPath" => "spades_9.svg"],
            ["suit" => "spades", "value" => "10", "imgPath" => "spades_10.svg"],
            ["suit" => "spades", "value" => "Jack", "imgPath" => "spades_jack.svg"],
            ["suit" => "spades", "value" => "Queen", "imgPath" => "spades_queen.svg"],
            ["suit" => "spades", "value" => "King", "imgPath" => "spades_king.svg"]
        ];

        // Extend the deck with other suits: hearts, diamonds, clubs
        foreach (['hearts', 'diamonds', 'clubs'] as $suit) {
            foreach (['ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'jack', 'queen', 'king'] as $value) {
                $deck[] = ["suit" => $suit, "value" => $value, "imgPath" => "{$suit}_{$value}.svg"];
            }
        }

        return new JsonResponse($deck);
    }




    #[Route("/api/deck/shuffle", name: "api_deck_shuffle")]
    public function shuffleDeck(SessionInterface $session): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());
        $this->customShuffle($deck);
        $session->set('deck', $deck);

        return new JsonResponse($deck);
    }
    private function customShuffle(array &$deck): void
    {
        $count = count($deck);
        for ($i = $count - 1; $i > 0; $i--) {
            $j = rand(0, $i);
            $temp = $deck[$i];
            $deck[$i] = $deck[$j];
            $deck[$j] = $temp;
        }
    }

    private function initializeDeck(): array
    {
        $deck = [];
        foreach (['spades', 'hearts', 'diamonds', 'clubs'] as $suit) {
            foreach (['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'] as $value) {
                $deck[] = ["suit" => $suit, "value" => $value, "imgPath" => "{$suit}_{$value}.svg"];
            }
        }
        return $deck;
    }



    #[Route("/api/deck/draw/{number}", name: "api_deck_draw_multiple", requirements: ["number" => '\d+'])]
    public function drawMultipleCards(SessionInterface $session, int $number): Response
    {
        return $this->drawCards($session, $number);
    }
    private function drawCards(SessionInterface $session, int $number): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());
        $drawnCards = array_splice($deck, 0, $number);
        $session->set('deck', $deck);
        return new JsonResponse([
            'drawnCards' => $drawnCards,
            'remaining' => count($deck)
        ]);
    }
}
