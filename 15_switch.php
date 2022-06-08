<?php

$status = 'paid';

// switch argument is loosely-type 
// for example int(1) can be equal to string(1)
switch ($status) {
    case 'paid':
        // do something..
        break;

    case 'unpaid':
        // do something..
        break;

    default:
        // unknown status..
        break;
}
