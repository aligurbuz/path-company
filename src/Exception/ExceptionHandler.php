<?php

namespace App\Exception;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Exception\Exception;

class ExceptionHandler extends AbstractController
{
    /**
     * @param FlattenException $exception
     * @return JsonResponse
     */
    public function handler(FlattenException $exception): JsonResponse
    {
        return $this->json([
            'status'        => false,
            'code'          => 400,
            'errorMessage'  => $exception->getMessage()
        ],400);
    }
}