<?php

trait fruit{
    public function apple(){
        echo "Apple is Awesome";
    }
}

trait flower{
    public function rose(){
        echo "Flower is Beatiful";
    }
}

trait book{
    public function poddo(){
        echo "Book is very Good";
    }
}

class Welcome{
    use flower,book,fruit;
}
$obj = new Welcome;
$obj->rose();
echo "<br>";
$obj->apple();
echo "<br>";
$obj->poddo();



?>