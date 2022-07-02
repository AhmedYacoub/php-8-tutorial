<?php

namespace App\Fields;

class Text extends Field
{
    public function __construct(private string $name) {
        parent::__construct($name);
    }

    public function render(): string
    {
        return <<<HTML
<label for="{$this->toSnakeCase()}">{$this->name}</label>
<input typed="text" name="{$this->toSnakeCase()}" />
<br />
HTML;
    }
}