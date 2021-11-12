<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use SebastianBergmann\Environment\Console;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api")
 */
class AuthController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;    
    }

    /**
     * @Route("/register", name="user.register")
     */
    public function index(Request $request, UserRepository $userRepository, SerializerInterface $serializer, Security $security): JsonResponse
    {
        $this->logger->info("Enter register index controller");
        $jsonData = json_decode($request->getContent());
        $user = $userRepository->create($jsonData);

        $this->logger->info($serializer->serialize($user, 'json'));
        $this->logger->info("Exit register index controller");

        return new JsonResponse([
            'user' => $serializer->serialize($user, 'json')
        ]);        
    }
}
