<?php

namespace App\Machines;

class Toaster
{
    protected array $slices;
    protected int $size;

    public function __construct() {
        $this->slices = [];
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            array_push($this->slices, $slice);
        }
    }

    public function toast(): void
    {
        if (count($this->slices) === 0) {
            echo 'Nothing to toast..';
            return;
        }

        foreach ($this->slices as $index => $slice) {
            echo ($index + 1) . ": Toasting {$slice}" . "<br />";

            // array_splice($this->slices, $index);
        }
    }
}
