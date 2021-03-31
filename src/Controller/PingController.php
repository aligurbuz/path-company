<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/ping', name: 'ping',methods: ['Get'])]
    public function index(): Response
    {
        return $this->json([
            'status' => true,
            'message' => 'Service working'
        ]);
    }
}
