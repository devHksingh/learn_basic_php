<?php

// clouser

$greet = function ($name) {
  echo "Hello ,$name\n";
};
echo $greet("David");

$numbers = [1, 2, 3, 4];
$squared = array_map(function ($n) {
  return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$message = "Heloo!";
// anonymous functions is don't have access to the variables defined outside.
/*
to access outside variables in anonymous function add use statement after a function
use($message)
i want this message variable to also exist in the context of this anonymous function
use ($message)
copy message variable is only existed in function . it does not change orginal value. 
use (&$message)
to modified variable message use "&" sign that return form anonymous fuction 
*/
// to modified variable message use "&" that return form anonymous fuction 
$greet2 = function ($name) use (&$message) {
  $message = $message . "!";
  return "$message ,$name\n";
};
echo $greet2("David");
echo "$message\n";
$squared = array_map(function ($n) {
  return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$client = "person";
$dump = $client;
echo "1. $dump , $client\n";
// $client = "1";
echo "2. $dump , $client\n";
$dump = "2";
echo "3. $dump , $client\n";