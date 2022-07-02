<?php

namespace App\PaymentGateway\Visa;

class Transaction
{
    public function __construct(private float $amount = 0) {
    }

    public function process(): string
    {
        return "Processing $". $this->amount ." transaction.";
    }
}