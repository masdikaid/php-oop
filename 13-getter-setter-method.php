<?php

// best practice of building good class is when apply encapsulation principal in your class
// thats mean if your attribute can't change directly, you need a getter and setter method
// your attribute must be private or protected so your attribute will be isolated, and only can access by getter and set by setter
// benefit for this encapsulation is you can protect your object and validate all of your properties

class User
{
    private string $username;
    private string $email;
    private string $phone;
    private bool $status = false;
    private int $visit = 0;

    public function __construct(string $username, string $email, string $phone)
    {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPhone($phone);

    }

    // getter username
    public function getUsername(): string 
    {
        return $this->username;
    }

    // getter email
    public function getEmail(): string 
    {
        return $this->email;
    }

    // getter phone
    public function getPhone(): string 
    {
        return $this->phone;
    }

    // getter status
    public function isActive(): bool 
    {
        return $this->status;
    }

    // getter visited
    public function totalVisited(): int 
    {
        return $this->visit;
    }




    // setter username
    public function setUsername(string $username): void
    {
        // validate if new username is blank string
        $newusername = trim($username);
        if ($newusername == ""){
            echo "failed to update username";
        } else {
            $this->username = $newusername;
        }
    }

    // setter email
    public function setEmail(string $email): void
    {
        // validate if new email is blank string
        $newemail = trim($email);
        if ($newemail == ""){
            echo "failed to update email";
        } else {
            $this->email = $newemail;
        }
    }

    // setter phone
    public function setPhone(string $phone): void
    {
        // validate if new phone is blank string
        $newphone = trim($phone);
        if ($newphone == ""){
            echo "failed to update phone";
        } else {
            $this->phone = $newphone;
        }
    }

    // setter status
    public function switchStatus(): void
    {
        $this->status = !$this->status;
    }

    // setter total visited
    public function visited(): void
    {
        $this->visit++;
    }

}



$user1 = new User("masdikaID", "mas@gmail.com", "085771121212");
echo $user1->getUsername() . PHP_EOL;
var_dump($user1->isActive()) . PHP_EOL;
$user1->visited();
$user1->visited();
$user1->visited();
$user1->visited();
$user1->switchStatus();
var_dump($user1->isActive()) . PHP_EOL;
echo $user1->totalVisited() . PHP_EOL;


