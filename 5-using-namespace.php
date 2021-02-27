<?php

require "4-namespace.php";

// you can use path of namespace like \Admin\User() or Admin\User()
// create object from class inside namespace
$u1 = new Admin\User();
$u2 = new Customer\User();

$u1->hello();
$u2->hello();

// call function inside namespace
Helper\hello();

//call constant inside namespace
echo "version " . Helper\APP_VERSION . PHP_EOL;