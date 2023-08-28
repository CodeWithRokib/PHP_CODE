<?php

trait message1{
    public function msg2(){
        echo "OOP is fun 1 !!! ";
    }
}
trait message2{
    public function msg1(){
        echo "OOP is fun 2 !!!";
    }
}

class Welcome{
   use message1;
}
class Welcome2{
    use message1,message2;
}

$obj = new Welcome();
$obj->msg2();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();


?>