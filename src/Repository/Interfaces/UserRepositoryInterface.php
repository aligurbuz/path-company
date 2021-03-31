<?php

namespace App\Repository\Interfaces;

use App\Repository\UserRepository;

interface UserRepositoryInterface
{
    /**
     * @return array
     * @see UserRepository::get()
     */
    public function get() : array;
}