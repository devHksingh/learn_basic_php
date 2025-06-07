<?php

$secret = "magic";
$attempts = 0;
$maxAttemps = 5;

while ($attempts < $maxAttemps) {
  echo "Guess the password";
  $guess = trim(fgets(STDIN));
  $attempts++;
  if ($guess === $secret) {
    echo "You guess right password💎💎\n";
    break;
  } elseif ($attempts < $maxAttemps) {
    echo "number of attempt: $attempts\n";
  } else {
    echo "out of attempts\n";
  }
}
// Instructions:
// 1. Create a variable $counter and set it to 1
// 2. Create a variable $maxNumber and set it to 7
// 3. Using a while loop, count from 1 to 7
// 4. For each number:
//    - If number is divisible by 3, print "Fizz!" (use modulo % operator)
//    - Otherwise print the number
$counter = 1;
$maxNumber = 7;

while($counter<=$maxNumber){
  if($counter%3===0){
    echo "Fizz!\n";
  }else{
    echo "$counter\n";
  }
  $counter++;
}