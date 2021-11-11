<?php

namespace App\Controller;

use App\Entity\MonthlyAccount;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;



class AccountController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/account", name="account")
     */
    public function index(): Response
    {
        $monthlyAccounts = $this->getDoctrine()
                        ->getRepository(MonthlyAccount::class)
                        ->findAll();

        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
            'monthlyAccounts' => $monthlyAccounts,
        ]);
    }
}
