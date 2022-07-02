<?php

namespace App\Interfaces;
/* 
    Interfaces could extend/inherit from any interface
    and it will inherit all methods declaration
    written in each of the extended interface.
*/
interface IDebtCollector
{
    public const MY_CONST = 'foo bar';

    public function __construct();

    public function collect(float $ownedAmount): float;


}