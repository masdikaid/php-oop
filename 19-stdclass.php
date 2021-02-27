<?php

// stdClass is object that converted from array with "(object)", thats allow you to use array like instance
$myarray = [
    "name" => "masdikaid",
    "email" => "mdid@gmail.com",
    "address" => "jl asem"
];

// convert array to object
$mystdClass = (object) $myarray;
var_dump($mystdClass);
echo $mystdClass->email . PHP_EOL;

// convert object to array
$newarray = (array) $mystdClass;
var_dump($newarray);