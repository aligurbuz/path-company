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
            'resource'    => static::removeSpecificFields($data)
        ];
    }

    /**
     * remove specific fields
     *
     * @param $data
     * @return mixed
     */
    private static function removeSpecificFields(mixed $data): mixed
    {
        if(property_exists($data,'password')) unset($data->password);

        return $data;
    }
}