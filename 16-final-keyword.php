<?php

// final class
// you can use final in class to make the class is the final and can't be inherit anymore

final class Student 
{

}

// this will be error
// class JuniorSchool extends Student
// {

// }




// final function
// you can use final in function inside of class to make the method is the final and can't be overide anymore

class Product
{
    public string $name;

    final public function getName() 
    {
        return $this->name;
    }
}

class Book extends Product
{
    // this will be error
    // public function getName()
    // {
    //     return "Book Name : $this->name";
    // }
}