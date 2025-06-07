<?php

$x = 10;

if ($x > 5) {
  echo "x is greater than 5 \n";
}

$score = 72;
if ($score >= 90) {
  echo "A\n";
} elseif ($score >= 80) {
  echo "B\n";
} else {
  echo "C\n";
}

$num = -10;
if ($num > 0) {
  if ($num % 2 === 0) {
    echo "Positive even number\n";
  } else {
    echo "Positive odd number\n ";
  }
} else {
  echo "Non-positive number\n";
}

$userName = "admin";
$password = "123456";
if ($userName == "admin" && $password == "123456") {
  echo "Success";
} else {
  echo "Credentials not valid";
}
// Grade Calculator and Pass/Fail Checker Exercise

// 1. Create a variable $score and assign it a numeric value between 0 and 100.
// 2. Use if-elseif-else statements to determine the letter grade based on the following scale:
//    A: 90-100, B: 80-89, C: 70-79, D: 60-69, F: 0-59
// 3. Create a boolean variable $isPassing and set it to true if the score is 60 or above, false otherwise.
// 4. Use echo to print a message in the format: "Score: [score], Grade: [letter grade], Passing: [true/false]"

$score = 88;

if ($score >= 90 && $score <= 100) {
  $letterGrade = "A";
} elseif ($score >= 80 && $score <= 89) {
  $letterGrade = "B";
} elseif ($score >= 70 && $score <= 79) {
  $letterGrade = "C";
} elseif ($score >= 60 && $score <= 69) {
  $letterGrade = "D";
} else {
  $letterGrade = "F";
}

if ($score >= 60) {
  $isPassing = true;
} else {
  $isPassing = false;
}

echo "Score: $score, Grade: $letterGrade, Passing: " . ($isPassing ? "true" : "false");
