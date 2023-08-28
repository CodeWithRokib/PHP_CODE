<?php

$month = array("January","February","March","April");

foreach($month as $value){
    echo "$value<br>";
}


//with using key
 
$student = array (  
    "Name" => "Rokib",  
    "Email" => "rokib@gmail.com",  
    "Age" => 22,  
    "Gender" => "Male"  
);  
   
foreach ($student as $key => $element) {  
    echo $key . " : " . $element;  
    echo "</br>";   
}  
 

?>