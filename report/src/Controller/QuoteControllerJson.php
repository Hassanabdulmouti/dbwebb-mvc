<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteControllerJson
{
    #[Route("/quote", name: "quote")]
    public function jsonNumber(): Response
    {
        $qoutes = [
            "Believe you can and you're halfway there.",
            "Don't watch the clock; do what it does. Keep going.",
            "The only way to achieve the impossible is to believe it is possible.",
            "The only limit to our realization of tomorrow will be our doubts of today.",
            "Success is not the key to happiness. Happiness is the key to success.",
            "The only place where success comes before work is in the dictionary.",
            "The harder you work for something, the greater you'll feel when you achieve it.",
            "Dream bigger. Do bigger.",
            "Don't stop when you're tired. Stop when you're done.",
            "Wake up with determination. Go to bed with satisfaction."
            ];
        $randomQuote = $qoutes[array_rand($qoutes)];
        date_default_timezone_set('Europe/Stockholm');
        $data = [
            'message' => $randomQuote,
            'timestamp' => date('Y-m-d h:i:s'),
        ];

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
