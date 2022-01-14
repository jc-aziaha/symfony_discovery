<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    #[Route('/', name: 'player')]
    public function index(): Response
    {
        $player0 = "Mario";
        $tab_players = [];

        return $this->render('player/index.html.twig', compact('player0', 'tab_players'));
    }
}
