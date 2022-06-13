<?php

/* Date & Times */

// Set timezone
date_default_timezone_set('Africa/Cairo');

echo time() ."<br>";    // UNIX timestamp

echo date('Y-m-d h:i a') ."<br>";
echo date('Y-m-d g:i a') ."<br>";

// from string to UNIX timestamp
echo strtotime('2022-06-13 15:00:00') . "<br>";
echo date('Y-m-d g:i a', strtotime('2022-06-13 15:00:00')) . "<br>";

// Human string format to date
echo date('Y-m-d g:i a', strtotime('first day of february')) . "<br>";
echo date('Y-m-d g:i a', strtotime('first day of 2022')) . "<br>";
echo date('Y-m-d g:i a', strtotime('2021W17')) . "<br>";    // <- first day of week 17 year 2021
echo date('Y-m-d g:i a', strtotime('last day of june')) . "<br>";
echo date('Y-m-d g:i a', strtotime('last day 2021')) . "<br>";