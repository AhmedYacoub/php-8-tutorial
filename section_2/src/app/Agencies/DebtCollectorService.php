<?php

namespace App\Agencies;

use App\Interfaces\IDebtCollector;

class DebtCollectorService
{
    /* 
        Using polymorphism, collectDebt() method accepts any
        object of a class that implements the IDebCollector
        interface.

        That means, whatever object of any class is passed as
        an argument to collectDebt() method, the object class
        must implements IDebtCollector interface.
    */
    public function collectDebt(IDebtCollector $iDebtCollector): string
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $iDebtCollector->collect($owedAmount);

        return "Collected $". $collectedAmount ." of $" . $owedAmount . " using " . $iDebtCollector::class . "<br />";
    }
}