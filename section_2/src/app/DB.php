<?php

namespace App;

class DB
{
    private static ?DB $singletonObject = null;

    private function __construct(?array $configurations)
    {
        echo 'Instance created. <br/>';
    }

    public static function getInstance(?array $configurations): DB
    {
        if (is_null(self::$singletonObject)) {
            self::$singletonObject = new DB($configurations);
        }

        return self::$singletonObject;
    }
}