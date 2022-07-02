<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{    
    private ?string $status;

    public function __construct()
    {
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid `status` argument given');
        }

        $this->status = $status;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
