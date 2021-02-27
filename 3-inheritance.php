<?php

// that make you able to duplicate or inherit attribute, method and all behavior of your class to another class
// one class only can inherit by many child, but 1 child just can inherit one class

// parrent class
class Manager
{
    var string $title;

    // example function
    function sayHello(): void
    {
        echo "hi, i am a $this->title manager !!!";
    }
};

// inherit manager class
class ProductManager extends Manager{

};


// declare child class
$p = new ProductManager();
$p->title = "Product";
$p->sayHello();
