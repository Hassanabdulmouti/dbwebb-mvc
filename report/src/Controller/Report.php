<?php

// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Report extends AbstractController
{
    // ...
    #[Route('/report', name: 'report')]

    public function test(): Response
    {
        return $this->render(view:'report.html.twig');
    }
}
