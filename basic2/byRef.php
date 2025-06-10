<?php
function doubleValue(int &$number):int{
  $number *= 2;
  return $number;
}

$original = 5;
var_dump($original);
/*
the value of $original is remain unchage bcz it create a copy of variable $original that only exist in the context of this function.
even modifying the argumnet does not modify the value that we passed when we call the function.

When we passing the variable with "&" sign or pass by refrence by adding & sign output is 
int(5)
int(10)
it modify variable $original value .even the modification is done inside the function.

*/
doubleValue($original);
var_dump($original);