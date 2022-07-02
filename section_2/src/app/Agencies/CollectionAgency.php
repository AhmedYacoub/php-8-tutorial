<?php

namespace App\Agencies;

use App\Interfaces\IDebtCollector;

/* 
    A class may implement/use any number of interfaces
    but it has to implement each method declaration
    written in each interface.

    If a class implements an interface which extends from
    another interface, the class must implement each
    method declaration in the interface and extended interface.
*/
class CollectionAgency implements IDebtCollector
{
    // public const MY_CONST = 'foo bar'; // <- X wont work, can not override constants from interfaces.

    public function __construct()
    {
    }

    public function collect(float $owedAmount): float
    {
        return mt_rand(0, $owedAmount);
    }
}
