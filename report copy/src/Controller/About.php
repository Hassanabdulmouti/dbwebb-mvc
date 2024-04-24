<?php

// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class About extends AbstractController
{
    // ...
    #[Route('/about', name: 'about')]

    public function test(): Response
    {
        // the template path is the relative file path from `templates/`
        return $this->render(view:'base2.html.twig');
    }
}
