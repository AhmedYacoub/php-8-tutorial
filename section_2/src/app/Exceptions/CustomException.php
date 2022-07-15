<?php

namespace App\Exceptions;

class CustomException extends \Exception
{

    public static function InvalidArgument(): static
    {
        return new static('Invalid argument passed');
    }

    public static function MissingBillingInfo(): static
    {
        return new static('Missing billing info');
    }
}