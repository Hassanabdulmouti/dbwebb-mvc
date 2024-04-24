<?php

// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Home extends AbstractController
{
    // ...
    #[Route('/', name: 'home')]

    public function test(): Response
    {
        // the template path is the relative file path from `templates/`
        return $this->render(view:'base.html.twig');
    }
}
