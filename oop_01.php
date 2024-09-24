<?php 

class Fruit{
    public $name;
    public $color;

    public function set_name($name){
        return $this->name = $name;
    }
    public function set_color($color){
        return $this->color = $color;
    }

    public function get_name(){
        return $this->name;
    }
    public function get_color(){
        return $this->color;
    }
}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();

?>