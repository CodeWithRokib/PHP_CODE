<?php

class Fruit{
  public $name;
  public $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  public function __destruct(){
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}
$apple = new Fruit("Apple","Red");

?>