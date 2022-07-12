<?php

namespace App;


/**
 * @property array $data
 * @property string $fullName
 * @property float $minimumWage
 * @property float maximumWage
 */
class Invoice
{
    protected array $data = [];
    private string $fullName = 'John Doe';
    protected float $minimumWage = 10.00;
    protected float $maximumWage = 100.00;

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name): mixed
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name)
    {
        return array_key_exists($name, $this->data);
    }

    /**
     * @param string $name
     * @return void
     */
    public function __unset(string $name)
    {
        unset($this->data[$name]);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
        // Check if method exists, and call the existing
        // method with its proper arguments.
        if (method_exists($this, $name)) {
            call_user_func([$this, $name], $arguments);
        }
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public static function __callStatic(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    /**
     * @param float $amount
     * @param string $description
     * @return string
     */
    public function customFun(float $amount, string $description): string
    {
        return "Amount: $amount, Description: $description";
    }

    /* Note: prior to PHP 8, a class must implement Stringable interface */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this;
    }

    /**
     * @return void
     */
    public function __invoke(): void
    {
        var_dump("invoked");
    }

    /**
     * @return array|null
     */
    public function __debugInfo(): ?array
    {
        return [
            'data' => $this->data,
            'fullName' => $this->fullName,
            'minimumWage' => $this->minimumWage,
            'maximumWage' => $this->maximumWage,
        ];
    }
}
