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

    /**
     * @return array
     * @see UserRepository::authenticate()
     */
    public function authenticate() : array;
}