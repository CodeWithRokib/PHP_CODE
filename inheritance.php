<?php 

class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "Fruit name is {$this->name} and color is {$this->color} ";
    }
}
class Mango extends Fruit{
    public function message(){
        echo "hello i am mango class";
    }
}
$apple = new Mango('Rupali', "Red");
$apple->message();
$apple->intro();

?>