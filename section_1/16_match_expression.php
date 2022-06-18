<?php

/* Match Expression */

$paymentStatus = 4;

// match expression argument is strict-type
// for example
// if $paymentStatus value is integer and all cases
// are of type integer..
// then the match expression will match an integer
// value to all cases
// if $paymentStatus value is string and all cases
// are of type integer, and there is no stringed value
// matching $paymentStatus value
// then default will be returned.
echo match($paymentStatus) {
    0 => 'Pending',
    1 => 'Paid',
    2 => 'Declined',
    3, 4 => 'Pending for authentication',
    default => 'Unknown',
};