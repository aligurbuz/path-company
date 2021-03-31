<?php

namespace App\Validation;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

abstract class ValidationManager
{
    /**
     * @var Request
     */
    protected Request $request;

    /**
     * ValidationManager constructor.
     */
    public function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    /**
     * @return ValidatorInterface
     */
    public function validation(): ValidatorInterface
    {
        return Validation::createValidator();
    }
}