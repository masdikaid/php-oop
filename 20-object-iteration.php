<?php
// you can implement IteratorAggregate and overide the getIterator method to decide which properties that can be show when iterate
final class Student implements IteratorAggregate
{
    // private make attribute couldn't show when iterate with common foreach without IteratorAggregate
    private string $name;
    private string $email;
    private string $address;
    private string $phone;
    private string $password; // this is secret and shoud be hide
    private string $lecture;


    public function __construct(string $name, string $email, string $address, string $phone, string $password, string $lecture)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->password = $password;
        $this->lecture = $lecture;

    }

    public function getIterator() : Iterator
    {
        $array = [
            "Student name" => $this->name,
            "Student address" => $this->address,
            "Student email" => $this->email,
            "Student lecture" => $this->lecture

        ];
        return new ArrayIterator($array);
    }


    // using yield
    // public function getIterator() : Iterator
    // {
    //     yield "Student name" => $this->name,
    //     yield "Student address" => $this->address,
    //     yield "Student email" => $this->email,
    //     yield "Student lecture" => $this->lecture
        
    // }
}

$studentA = new Student("masdikaid", "mas@gm.co", "asem jaya", "08612121", "mdididas", "Programming");

foreach ($studentA as $key => $val)
{
    echo "$key\t :\t $val\n";
}

