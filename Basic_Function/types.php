<?php
declare(strict_types=1);
function add(int $a, int $b):int{
  return $a + $b;
}
/*
PHP 5 - add type
PHP 7 - strict types
*/
// echo add("5",3);
// Fatal error: Uncaught TypeError: add(): Argument #1 ($a) must be of type int, string given,
// var_dump( add("5",3));
// Fatal error: Uncaught TypeError: add(): Argument #1 ($a) must be of type int, float given
echo add((int)5.0,3);
echo add(5,3);