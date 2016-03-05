<?php

/*function __autoload($claseName){
    //echo $claseName;
    echo "<br>";
    $arrClassName = explode("\\",$claseName);
    
    $filename = $arrClassName[count($arrClassName)-1].".php"; 
    
    //echo $filename;
    include_once("$filename");
    
}*/

include_once("vendor/autoload.php");


//include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."bitm".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");
use App\Bitm\greeting;
use App\Bitm\Person;

$greeting1 = new greeting('A');
$greeting2 = new greeting('B');
$greeting3 = new greeting('C');
//echo $greeting1->greetings;
//echo "<br>";
//echo $greeting1->aSecretInformation;

echo $greeting1->getName();
echo $greeting2->getName();
echo $greeting3->getName();

//$greeting2->sayHello();


$person1 = new Person();
$person1->getName();