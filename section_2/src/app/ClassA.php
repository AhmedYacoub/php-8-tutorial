<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public static function getName(): string
    {
        /* Early static binding */
        // `self` keyword will return always App\ClassA::$name value
        // because self is restricted to its class and it wont work with inheritance.
        // return self::$name;  
        
        /* Late static binding */
        // `static` keyword is related to its class and whatever class inherited from its class.
        return static::$name;
    }

    public static function make(): static
    {
        return new static();
    }
}