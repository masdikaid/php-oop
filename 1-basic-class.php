<?php

// basic class
class Person
{
    // properties/field/attributes
    var $name; //basic attribute
    var string $address; //attribute with data type
    var string $phone = "8716872531"; //attribute with default value
    var ? string $email = null; // ? mean value is nullable

    // constant variable that unchangeable 
    // just support in php 7.4 or higher
    const CLASS_VERSION = "1.0.0";
    const type = "1.0.0";


    // method/behaviour
    function sayHello(string $name)
    {
        echo "hello $name\n";
        echo "i am is $this->name\n"; // use this to access attribute of object
        echo "app version " . self::CLASS_VERSION . PHP_EOL; //use self:: to access self const inside of class method
    }

};


// create object instance
$person1 = new Person();
$person1 -> name = "masdikaid";
$person1 -> address = "aksldjaijsdjakshdalkjsfhlasjfa";
$person1 -> sayHello("masdika");



var_dump($person1);
// access constant class
var_dump(Person::CLASS_VERSION);
