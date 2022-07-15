<?php

namespace App\Models;

use App\Collection;

/* Using Iterator interface to make custom Iterator class (collection) */
/* Pros: customization */
/* Cons: lots of boilerplate */
// class PersonCollection implements \Iterator
// {
//     public function __construct(public array $persons)
//     {
//     }

//     public function current(): mixed
//     {
//         return current($this->persons);
//     }

//     public function next(): void
//     {
//         next($this->persons);
//     }

//     public function key(): mixed
//     {
//         return key($this->persons);
//     }

//     public function valid(): bool
//     {
//         return current($this->persons) !== false;
//     }

//     public function rewind(): void
//     {
//         reset($this->persons);
//     }
// }

/* Check src/app/Collection.php */
class PersonCollection extends Collection
{

}