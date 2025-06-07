<?php

$isStudent = 1;
/*
var_dump() => a function in php used to dispaly structured information about one or more variables.
*/
var_dump($isStudent);
// compersion 
var_dump($isStudent, $isStudent == true);
var_dump($isStudent, true, $isStudent === true);

$scores = [85, "40"];
//  str(40) => int (40) ouput is int(125)
var_dump(($scores[0] + $scores[1]));

$scores = [85, "20", 22.4];
// float(127.4)
var_dump(($scores[0] + $scores[1] + $scores[2]));
$scores = [85, "20.4"];
// float(105.4)
/*
array(2) {
  [0]=>
  int(85)
  [1]=>
  string(4) "20.4"
}
  float(105.4)
*/
var_dump($scores, $scores[0] + $scores[1]);
// use type casting
/*
array(2) {
  [0]=>
  int(84)
  [1]=>
  int(44)
}
int(128)
*/
$scores = [84, (int)"44.8"];
var_dump($scores, $scores[0] + $scores[1]);
$total = $scores[0] + $scores[1];
var_dump($scores, $total);
// Total score is: 128 . can not put variable in single coat
echo "Total score is: $total\n";
