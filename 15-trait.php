<?php

// trait is most likely abstract, it can have attributes/properties, constant, method and abstract method
// if there is abstract method inside trait, so that must be overide inside a class
// you can use trait using "use" keyword to implementing trait
// in common use, trait often use most likely collection of function
// overiding order if there is same function/method : class > trait > instance

trait SayGoodBye
{
    public function seeYouLater ()
    {
        echo "see you later !!\n";
    }

    public function goodBye ()
    {
        echo "good By !!\n";
    }
    
    public function niceToMeetYou ()
    {
        echo "nice To Meet you !!\n";
    }

    public function haveaNiceDay ()
    {
        echo "have a nice day !!\n";
    }
    
}

trait SayHello
{
    public function hello ()
    {
        echo "hello !!\n";
    }
    
    public function hi ()
    {
        echo "hi there !!\n";
    }

    public function howAreYou ()
    {
        echo "How Are you !!\n";
    }
    
}

trait Greet 
{
    public function seeYouLater ()
    {
        echo "see you later from greet trait !!\n";
    }

    public function goodBye ()
    {
        echo "good By from greet trait !!\n";
    }

    public function hello ()
    {
        echo "hello from greet trait !!\n";
    }
    
    public function hi ()
    {
        echo "hi there from greet trait !!\n";
    }
}





// implementing trait
class Greeting
{
    use SayGoodBye, SayHello;
    // visibility inside trait is changeable, like this
    // use SayGoodBye, SayHello {
    //     goodBye as private;
    //     hello as protected;
    // };
}


Greeting::goodBye();
Greeting::hello();





// handle trait confict
class TestConflict
{
    // in each trait have several same method, to fix conflict we can do like this
    use SayGoodBye, SayHello, Greet {
        SayGoodBye::seeYouLater insteadOf Greet; //to use seeYouLater method from SayGoodBye trait instead of Greet
        Greet::goodBye insteadOf SayGoodBye; //to use Greet method from SayGoodBye trait instead of SayGoodBye
        SayHello::hello insteadOf Greet; //to use seeYouLater method from SayHello trait instead of Greet
        Greet::hi insteadOf SayHello; //to use Greet method from SayGoodBye trait instead of SayHello
    }
}

TestConflict::goodBye();
TestConflict::hello();






// trait inheritance
trait MyChild
{
    // for inherit child is just like implement with use like implement trait in class
    use Greet;
}

class TryChild 
{
    use MyChild;
}

TryChild::hello();

