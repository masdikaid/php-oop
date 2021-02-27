<?php

// polymorphism is when object able to change many forms from related classes or interface that are related each othe by inheritance
// in this way we decide to employe attribute in company class only can asign by Employe type object class, but not only Employe object, include the related class that inherit by Employe in example Manager and Programer

Class Company {

    public string $name;
    public Employe $employe;

    public function __construct (string $name, Employe $employe)
    {
        $this->name = $name;
        $this->employe = $employe;

    }
    
};


class Employe {
    
    public string $name;
    public string $job;

    public function __construct (string $name, string $job)
    {
        $this->name = $name;
        $this->job = $job;
    }
    
    public function info () : Employe
    {
        return $this;
    }

};

class Manager extends Employe
{

    public function __construct(string $name)
    {
        parent::__construct($name, "Manager");
    }

};


class Programmer extends Employe
{

    public function __construct(string $name)
    {
        parent::__construct($name, "Programmer");
    }

};

$emp1 = new Manager("dika");
$emp2 = new Programmer("adi");

$comp1 = new Company("PT. SEGAR INDAH", $emp1);
$comp2 = new Company("PT. SEGAR INDAH BERSERI", $emp2);

echo "hello i am {$comp1->employe->info()->name}, i am a {$comp1->employe->info()->job}" . PHP_EOL;
echo "hello i am {$comp2->employe->info()->name}, i am a {$comp2->employe->info()->job}" . PHP_EOL;



