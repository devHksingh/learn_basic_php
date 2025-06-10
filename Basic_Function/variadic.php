<?php

declare(strict_types=1);
function sum(int ...$numbers): int
{
  // array(0) {
  // }
  var_dump($numbers);
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}
// int(0)
var_dump(sum());
var_dump(sum(5));
var_dump(sum(2, 10, 20, 22));

$numbers = [1, 2, 3, 4];

sum($numbers[0], $numbers[1], $numbers[2], $numbers[3]);

// unpacking array in arguments
var_dump(sum(...$numbers));

// another fun;ction 
function introduceTeam(string $teamName, string ...$members): void
{
  var_dump($members);
  echo "Team : $teamName\n";
  echo "Members: " . implode(", ", $members) . "\n";
}
introduceTeam("A team", "Jhon", "Alice");
$members = ["Harry", "Johhny", "Joe"];
introduceTeam("B team", ...$members);

introduceTeam("C team", "Alice", ...$members);
