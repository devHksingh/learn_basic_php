<?php
/*
== Operator: This operator is used to check the given values are equal or not. If yes, it returns true, otherwise it returns false.
=== Operator: This operator is used to check the given values and its data type are equal or not. If yes, then it returns true, otherwise it returns false.

trim(fgets(STDIN)); // Reads input and removes any whitespace
fgets(STDIN) is a predefined function in PHP that reads input from the user through the keyboard.
To clean the input and remove any unnecessary whitespace, we often use the trim() function.
*/
do {
  // loop body
  $diceRoll = rand(1, 6);
  echo "You rolled a $diceRoll\n";
  if ($diceRoll == 6) {
    echo "Congrats! You hit the jackepot\n";
  }
  echo "Roll again ? (y/n) : ";
  $rollAgain = trim(fgets(STDIN));
} while ($rollAgain == 'y');
