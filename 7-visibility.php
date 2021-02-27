<?php

// by default visibility is public for attribute or method

/*
=============================================
| Modifier      | Class | Subclass  | World |
| Public        | Y     | Y         | Y     |
| Protected     | Y     | Y         | N     |
| Private       | Y     | N         | N     |
=============================================
*/

class ProductPlastic {

    // var == public
    var string $name;
    var int $price;
    // public string $name;
    // public int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
};

$botle = new ProductPlastic("botle", 3000);
echo $botle->name . PHP_EOL;





class ProductSoap {

    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
};

// when protected access from subclass/childclass will be able
class Shampo extends ProductSoap{
    public function hello(){
        echo $this->name . PHP_EOL;
    }
};

$soap = new ProductSoap("soap", 3000);
// this will be error
// echo $soap->name . PHP_EOL;




class ProductFood {

    private string $name;
    private int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
};

// when private access from subclass/childclass will be error
class Drink extends ProductFood{
    public function hello(){
        echo $this->name . PHP_EOL;
    }
};
$fanta = new Drink("fanta", 3000);
// $fanta->hello();



$nodle = new ProductFood("nodle", 3000);
// this will be error when private accessed from public
// echo $nodle->name . PHP_EOL;

