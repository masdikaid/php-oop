<?php

class ValidationExpection extends Exception
{

}



try {
    //code...
    throw new ValidationExpection("Error Processing Request", 1);
} catch (ValidationExpection $th) {
    echo "found {$th}\n";
} finally {
    echo "always show \n";
}