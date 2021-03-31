<?php

namespace App\Exception;

/**
 * Class Exception
 * @method static customException($message = null)
 * @package App\Exception
 */
class Exception
{
    /**
     * throws custom exception for statement defined as static
     *
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        $namespace = 'App\Exception\\'.ucfirst($name);

        if(isset($arguments[0])){
            throw new $namespace($arguments[0]);
        }
        else{
            throw new $namespace();
        }
    }
}