<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\Output;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends AbstractController
{
    /**
     * get authenticate user
     *
     * @param UserInterface $user
     * @return Response
     */
    #[Route('/user', name: 'user',methods: ['Get'])]
    public function index(UserInterface $user): Response
    {
        $serializer = $this->get('serializer');
        $auth = json_decode($serializer->serialize($user,'json'));

        return $this->json(Output::ok($auth));
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
