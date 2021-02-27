<?php

// with annonymous class you able to build class from interface and create the object in the same time

interface Simple
{
    public function sayHello() : void;
    public function sayGoodBye() : void;

}





// create annonymous class
$annon = new class implements Simple
{
    public function sayHello() : void
    {
        echo "hallo !!!\n";
    }

    public function sayGoodBye() : void
    {
        echo "Good Bye !!!\n";
    }
};



// create annonymous class with argument
$annonym = new class ("masdika") implements Simple
{
    public string $name;

    public function __Construct($name)
    {
        $this->name = $name;
    }

    public function sayHello() : void
    {
        echo "hallo $this->name !!!\n";
    }

    public function sayGoodBye() : void
    {
        echo "Good Bye $this->name !!!\n";
    }
};

$annon->sayGoodBye();
$annonym->sayHello();