<?php

namespace App\Bitm;

class greeting{
    
    public $name = "";
    public $greetings = "Hello World";
    private $aSecretInformation = "Bolojabena";
    
    function __construct($n) {
       $this->name = $n;
    }
    function sayHello()
    {
        return $this->greetings;
    }
    
    function getName()
    {
        return $this->name;
    }
    function __destruct() {
        echo "i am dying";
    }
}

