<?php
$person = "John";
$client = &$person;
/*
if $client = $person;
string(4) "John"
string(4) "John"
if $client = &$person;
string(4) "John"
string(4) "John"
*/
var_dump($person,$client);

$client = "Robert";
/*
string(6) "Robert"
string(6) "Robert"
*/
var_dump($person, $client);
$person = "Harry";
/*
string(5) "Harry"
string(5) "Harry"
*/
var_dump($person, $client);