<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DisplayCards extends AbstractController
{
    private $cardController;

    public function __construct(CardController $cardController)
    {
        $this->cardController = $cardController;
    }

    #[Route('/card/deck', name: 'carddeck')]
    public function display(): Response
    {
        $deck = json_decode($this->cardController->cards()->getContent(), true);

        return $this->render('cards.html.twig', ['deck' => $deck]);
    }
}