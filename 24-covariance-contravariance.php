<?php

// covariance allows you to change specifict return object
// contravariance is reverse for covariance

interface Animal
{
    public function eat (AnimalFood $food) : void;
}

class Pig implements Animal
{
    public function eat (PigFood $food) : void
    {

    }

}

class Dog implements Animal
{
    public function eat (Food $food) : void // this is contravariance which is Food type is more general from AnimalFood that implement in it interface
    {

    }

}

interface AnimalShelter 
{
    public function adopt () : Animal;
}

// change animal to a specifict object like cat or dog 
class PigShelter implements AnimalShelter
{
    public function adopt () : Animal
    {
        return new Dog();
    }

}