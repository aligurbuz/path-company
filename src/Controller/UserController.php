<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\Interfaces\UserRepositoryInterface;
use App\Service\Output;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * get authenticate user
     *
     * @param UserRepositoryInterface $user
     * @return Response
     */
    #[Route('/user', name: 'user',methods: ['Get'])]
    public function index(UserRepositoryInterface $user): Response
    {
        return $this->json(Output::ok($user->get()));
    }

    /**
     * create user
     *
     * @return Response
     */
    #[Route('/user', name: 'user_create',methods: ['Post'])]
    public function create(): Response
    {
        return $this->json(['method' => 'create']);
    }

    /**
     * update user data
     *
     * @return Response
     */
    #[Route('/user', name: 'user_update',methods: ['Put'])]
    public function update(): Response
    {
        return $this->json(['method' => 'update']);
    }
}
