<?php

// abstract class is class that only can use to inherit a class,  and couldn't create an object instance
// all methode/function inside abstract class must be abstract function, if not that will be error

abstract class Employe
{
    public string $nama;
    public string $job;

    // function in abstract class only can declare type of function and return type, not the block of code and couldn't have block
    // all class that inherit from this abstract class must overide all function off absract class
    abstract public function hello () : string;

    abstract protected function screet () : Employe;

    abstract public function printName () : void;

};

