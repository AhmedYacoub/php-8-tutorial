<?php

namespace App;

use Traversable;

/* Implementing IteratorAggregate to make this class iterable */
/* Pros: simple clean way by implementing getIterator() method. */
/* Cons: lake of customization. */
class Collection implements \IteratorAggregate
{
    public function __construct(private array $items)
    {
        
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->items);
    }
}