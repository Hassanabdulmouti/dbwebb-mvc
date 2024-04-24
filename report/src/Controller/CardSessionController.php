<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class CardSessionController extends AbstractController
{
    #[Route("/card", name: "card_landing")]
    public function landingPage(): Response
    {
        return $this->render('card/landing.html.twig');
    }

    #[Route("/session", name: "session_page")]
    public function sessionPage(SessionInterface $session): Response
    {
        $sessionData = $session->all();
        return new JsonResponse($sessionData);
    }

    #[Route("/session/delete", name: "session_delete")]
    public function deleteSession(SessionInterface $session): RedirectResponse
    {
        $session->clear();
        return $this->redirectToRoute('card_landing');
    }



    #[Route("/card/deck/shuffle", name: "card_deck_shuffle")]
    public function shuffleDeck(SessionInterface $session): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());
        $this->customShuffle($deck);
        $session->set('deck', $deck);

        return $this->render('card/deck_shuffle.html.twig', [
            'deck' => $deck,
            'title' => 'Shuffled Deck'
        ]);
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


    #[Route("/card/deck/draw", name: "card_deck_draw")]
    public function drawCard(SessionInterface $session): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());

        $drawnCards = array_splice($deck, 0, 1);
        $remaining = count($deck);

        if ($remaining > 0) {
            $session->set('deck', $deck);
        } else {
            $session->remove('deck');
        }

        return $this->render('card/deck_draw.html.twig', [
            'drawnCards' => $drawnCards,
            'remaining' => $remaining,
            'deckEmpty' => $remaining === 0
        ]);
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

    #[Route("/card/deck/draw/{number}", name: "card_deck_draw_multiple", requirements: ["number" => '\d+'])]
    public function drawMultipleCards(SessionInterface $session, int $number): Response
    {
        return $this->drawCards($session, $number);
    }



    private function drawCards(SessionInterface $session, int $number): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());
        $drawnCards = array_splice($deck, 0, $number);
        $session->set('deck', $deck);
        $remaining = count($deck);

        if ($remaining > 0) {
            $session->set('deck', $deck);
        } else {
            $session->remove('deck');
        }

        return $this->render('card/deck_draw_multiple.html.twig', [
            'drawnCards' => $drawnCards,
            'remaining' => count($deck),
            'deckEmpty' => $remaining === 0

        ]);
    }

}
