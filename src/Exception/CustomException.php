<?php

namespace App\Exception;

use Exception;
use Throwable;

class CustomException extends Exception
{
    /**
     * CustomException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Custom Exception", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}