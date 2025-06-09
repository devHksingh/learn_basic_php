<?php
function greet($name){
  return "Hello ,$name \n";
}

echo greet("jhon");

// function with arguments
function greetWithTime($name,$time="day"){
  return "Good $time,$name\n";
}

echo greetWithTime("bob");
echo greetWithTime("charli","eve");
