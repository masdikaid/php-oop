<?php

class Windows {

    public function sounds () : int {
        return 4;
    }
};

class WindowsPhone extends Windows {

    public function sounds () : int {
        return 0;
    }
    
    // use parent:: to access parent method
    public function windowsSounds () {
        return parent::sounds();
    }
};

$win = new Windows();
echo $win->sounds() . PHP_EOL;

$wp = new WindowsPhone();
echo $wp->sounds() . PHP_EOL;
echo $wp->windowsSounds() . PHP_EOL;