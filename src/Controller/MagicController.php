<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MagicController extends AbstractController
{
    /**
     * @Route("/magic", name="magic")
     */
    public function index(): Response
    {
        return $this->render('magic/index.html.twig', [
            'controller_name' => 'MagicController',
        ]);
    }
}
