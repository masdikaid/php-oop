<?php


// namespace allow you to able build class with same name
// namespace is nestedable

// single namespace in a file
// namespace Admin;
// class User {
//     function hello(){
//         echo "helo from admin";
//     }
// };

// multi namespace in a file
namespace Admin {
    class User {
        function hello(){
            echo "helo from admin\n";
        }
    };

    class Role {

    };

    class Department {

    };
};


namespace Customer {
    class User {
        function hello(){
            echo "helo from admin\n";
        }
    };
};


// function and constanta inside namespace
namespace Helper {
    function hello(){
        echo "helo from helper\n";
    };

    const APP_VERSION = "1.0.0";
};


// global namespace
// by default all code in <?php is named global namespace
namespace {
    // so all inside this namespace is like normal php file
    echo "\nglobal namespace\n";
    // you can use path of namespace like \Admin\User() or Admin\User()
    // create object from class inside namespace
    $u1 = new Admin\User();
    $u2 = new Customer\User();

    $u1->hello();
    $u2->hello();

    // call function inside namespace
    Helper\hello();
};