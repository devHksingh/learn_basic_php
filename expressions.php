<?php
// print statement
echo "welcome to php\n";
// assign value to variable
// assignment expression
$name = "Alice";
// it will return what is assign the value
echo $person_2 = "Bob\n";
// String concentination 
echo "Hello, " . $name . "!\n";
// arithmetic expression
$pizzas = 3;
$slicePerPizza = 8;

$totalSlices = $pizzas * $slicePerPizza;
echo $totalSlices . "\n";
// output is in number formate
echo $pizzas;
// Output is in string formate type casting 
echo "\n" . "Total pizza slices: " . $totalSlices . "\n";
// boolean
$isHungry = true;

echo "Hungry?";
// ternary opreator
echo $isHungry? "Yes\n":"No\n";
// Temperature Converter Exercise

// Instructions:
// 1. Create a variable $celsius and assign it a numeric value.
// 2. Create a variable $fahrenheit and calculate its value using the formula: ($celsius * 9/5) + 32
// 3. Use echo to print a message in the format: "[Celsius value]C is [Fahrenheit value]F"
// 4. Example output: 20C is 68F

$celsius = 30;
$fahrenheit = ($celsius*9/5)+32;
echo $celsius."C is ".$fahrenheit."F";