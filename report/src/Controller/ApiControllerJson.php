<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiControllerJson
{
    #[Route("/api", name: "api")]
    public function jsonNumber(): Response
    {
        $routes = [
            "api",
            "lucky",
            "quote",
            "api/deck",
            "api/deck/shuffle",
            "api/deck/draw/{number}",


            ];
        $data = [
            'Json routes' => $routes,
            'timestamp' => date('Y-m-d h:i:s'),
        ];

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
