<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', []);
    }

    /**
     * Homepage for authentificated user
     * 
     * @IsGranted("ROLE_USER")
     * @Route("/home", name="home_auth")
     *
     * @return Response
     */
    public function homeAuth(): Response
    {
        return $this->render('home/index_auth.html.twig', []);
    }

    /**
     * Test page for authentificated user
     * 
     * @IsGranted("ROLE_USER")
     * @Route("/test", name="test")
     *
     * @return Response
     */
    public function test(): Response
    {
        return $this->render('home/test.html.twig', []);
    }
}
