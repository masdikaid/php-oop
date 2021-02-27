<?php

class Manager {

    protected string $name;
    protected string $title; 
    protected int $employe = 0;   

    public function __construct(string $name, string $title){
        $this->name = $name;
        $this->title = $title;
    }

    public function setEmploye(): void {
        $this->employe = 16;
    }

};

$m1 = new Manager("masdika ID", "Manager");
$m1->setEmploye();
var_dump($m1);
$m2 = clone $m1;
var_dump($m2);



// decide what to exclude clone data
class ManagerProgrammer extends Manager {
    // create __clone()
    public function __clone()
    {
        unset($this->employe);
    }
}

$p1 = new ManagerProgrammer("masdika ID", "Programmer");
$p1->setEmploye();
var_dump($p1);
$p2 = clone $p1;
var_dump($p2);