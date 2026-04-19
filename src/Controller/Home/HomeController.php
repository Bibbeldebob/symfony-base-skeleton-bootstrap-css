<?php

declare(strict_types=1);

namespace App\Controller\Home;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function number(): Response
    {
        return $this->render('home/home.html.twig');
    }
}
