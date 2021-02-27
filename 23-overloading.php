<?php

// overloading allows you to build dinamic properties and method in class
// for properties you can use magic function __get($name), __set($name, $value), __isset($name), __unset($value)
// for method you can use __call($name, $argument), __callStatic($name, $argument)

final class Student
{
    private string $name;
    private $dynamicProps = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($name)
    {
        echo "search data for $name ....\n";
        return $this->dynamicProps[$name];
    }

    public function __set(string $name, $value) : void
    {
        echo "set data for $name = $value\n";
        $this->dynamicProps[$name] = $value;

    }
}

$new = new Student("masdika ID");
echo $new->lecture;

$new->lecture = "Math";
echo $new->lecture;
