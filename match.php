<?php
// match was introduce in PHP 8.0
$status = 100;
/*
 an expression ($status < 200), which evaluates to true or false.
 match in PHP does not allow expressions as keys. It only performs strict comparisons (===) of the $status against the listed values.
  $status < 200 evaluates to true (i.e., 1)
  100 === 1        ❌ false
100 === 200      ❌ false
100 === 300      ❌ false
None of them match, so it returns 'Unknow Status'.
in switch statement '600' == 600 , it is losely compare .it convert '600' to int 600 .
type cohereantion happened
*/
$message = match ($status) {
  $status < 200  => 'random',
  200, 300 => 'Success',
  
  400, 404, 500 => 'Internal Server Error',
  default => 'Unknow Status'
};

echo "$message \n";
