<?php

declare(strict_types=1);

namespace App\Controller;

use App\Validation\LoginValidation;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    /**
     * @param LoginValidation $loginValidation
     * @return JsonResponse
     */
    #[Route('/login', name: 'login',methods: ['Post'])]
    public function index(LoginValidation $loginValidation): JsonResponse
    {
        $loginValidation->handle();

        return $this->json([
            'status' => 200
        ]);
    }
}
