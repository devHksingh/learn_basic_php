<?php

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
