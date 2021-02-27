<?php

// with "static" keyword in class make you able to access your class method and properties without create an instance
// if you use static, the method and properties can't be access in instance


class Utillitier
{

    static public function convertString(string $strings)
    {
        return trim($strings);
    }

}

echo Utillitier::convertString("              masdika adi          ");
