<?php

// that make you able to duplicate or inherit attribute, method and all behavior of your class to another class
// one class only can inherit by many child, but 1 child just can inherit one class

// parrent class
class Manager
{
    protected string $title;
    protected string $name; 

    public function __construct(string $title, string $name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "hi, i am $this->name a $this->title manager !!!";
    }
};

// inherit manager class
class ProductManager extends Manager{

    // you can overiding contructor with change the argument, but in recomendation to given default argument if you decrement the argument
    public function __construct (string $nama)
    {
        // not must be use parent
        parent::__construct("Product", $nama);
        // $this->name = $nama;
        // $this->title = "Product";

    }
};


// declare child class
$p = new ProductManager("masdika");
$p->sayHello();
