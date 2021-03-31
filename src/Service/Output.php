<?php

namespace App\Service;

use JetBrains\PhpStorm\ArrayShape;

class Output
{
    /**
     * application success 200 content for response
     *
     * @param mixed $data
     * @return array
     */
    #[ArrayShape(['status' => "bool", 'code' => "int", 'resource' => "mixed"])]
    public static function ok(mixed $data) : array
    {
        return [
            'status'      => true,
            'code'        => 200,
            'resource'    => $data
        ];
    }
}