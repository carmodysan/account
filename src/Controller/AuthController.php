<?php

namespace App\Controller;

use App\Repository\UserRepository;
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
    /**
     * @Route("/register", name="user.register")
     */
    public function index(Request $request, UserRepository $userRepository, SerializerInterface $serializer, Security $security): JsonResponse
    {
        $jsonData = json_decode($request->getContent());
        $user = $userRepository->create($jsonData);

        return new JsonResponse([
            'user' => $serializer->serialize($user, 'json')
        ]);        
    }
}
