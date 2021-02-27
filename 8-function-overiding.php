<?php

// create parrent class
class Manager {

    protected string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(): void {
        echo "hello my name is $name, i am a manager !!!\n";
    }

};

// inherit class
class ProductManager extends Manager {

    // this will overiding sayHello function from main class
    // in php overiding with different argument isn't recomended
    public function sayHello(): void {
        echo "hello my name is $this->name, i am a manager !!!\n";
    }
};

$pm = new ProductManager("masdika");
$pm->sayHello();

