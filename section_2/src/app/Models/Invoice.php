<?php

namespace App\Models;

use App\Exceptions\CustomException;

class Invoice
{
    public function __construct(public Customer $customer)
    {

    }

    public function process(float $amount): void
    {
        if ($amount <= 0) {
            throw CustomException::InvalidArgument();
        }

        if (empty($this->customer->getBillingInfo())) {
            /* Custom exception */
            throw CustomException::MissingBillingInfo();
        }

        echo 'Processing $' . $amount . ' invoice- ';

        sleep(1);

        echo 'OK' . PHP_EOL;
    }
}