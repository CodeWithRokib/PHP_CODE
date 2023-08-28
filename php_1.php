<?php

class Fruit{
public $num1;
public $num2;


function __construct($num1,$num2){
      $this->num1 = $num1;
      $this->num2 = $num2;
     
}

function rokib(){
    echo $this->num1 + $this->num2."<br>";
}

}

class Number extends Fruit{
    function num(){
        echo "This is Number Function <br>";
    }
}

$obj1 = new Number(13,7);
echo $obj1->rokib();
echo $obj1->num();





?>