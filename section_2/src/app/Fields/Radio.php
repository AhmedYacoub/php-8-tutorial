<?php

namespace App\Fields;

class Radio extends Boolean
{
    public function __construct(private string $name) {
        parent::__construct($name);
    }

    public function render(): string
    {
        return <<<HTML
<label for="{$this->toSnakeCase()}">{$this->name}</label>
<input type="radio" name="{$this->toSnakeCase()}" />
<br />
HTML;
    }
}