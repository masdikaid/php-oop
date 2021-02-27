<?php

// interface is like abstract but better in best practice
// in interface all method is abstract and have no block
// in interface only can declare constant and can't declare attribute/properties
// use "implements" to use interface to a class
// class can implement more than one class
// interfance can inherit other interface even multiple inheritance

interface Employe {

    function getEmployeName() : string;
    
}

interface BrandCompany {

    function getCompanyName() : string;
    
}



// interface inheritance
// to implement interface inheritance use "extend" keyword
// interface inheritance support multi inheritance
// like abstract, all method of parent interface must be overiding

interface Company extends Employe, BrandCompany
{

    function getEmployeName() : string;

    function getCompanyName() : string;

}



// implement interface in class
// like abstract, all method of interface must be overiding
class FoodCompany implements Company 
{
    protected string $employename;
    protected string $companyname;

    public function __construct (string $employename, string $companyname)
    {
        $this->employename = $employename;
        $this->companyname = $companyname;
    }

    public function getEmployeName() : string
    {
        return $this->employename;
    }

    public function getCompanyName() : string
    {
        return $this->companyname;
    }
}