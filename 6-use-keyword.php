<?php

// use keyword can be use to aliasing a class, function, constanta etc
require "3-inheritance.php";
require "4-namespace.php";

// use keyword to class and aliasing
use ProductManager as PrMan;

// use keyword to a namespace with same name of class
// if you not aliasing with "as", this will be a conflict class
use Customer\User as Customer;

// group use to import multipe class
use Admin\{User as Admin, Role, Departmen as Dept};

// use keyword to function without aliasing
use function Helper\hello;

// use keyword to const and aliasing
use const Helper\APP_VERSION as APP;





echo "\nusing use keyword !!!\n";
$pm = new PrMan();
$adm = new Admin();
$cst = new Customer();
$adm->hello();
$cst->hello();
hello();
echo APP . PHP_EOL;