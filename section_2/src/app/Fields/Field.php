<?php

namespace App\Fields;

abstract class Field
{
    public function __construct(private string $name) {

    }

    public function toSnakeCase(): string
    {
        return $this->name ? strtolower(str_replace(' ', '_', $this->name)) : '';
    }

    abstract public function render(): string;
}