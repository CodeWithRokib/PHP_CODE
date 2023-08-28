<?php
$num = 21;
$is_prime=true;

//if number is positive
if($num == 1){
    echo "1 is not a prime or composite number";
}elseif($num>1){
       for($i=2;$i<$num;$i++){
        if($num % $i == 0){
            $is_prime = false;
            break;
        }
    }
    if($is_prime){
        echo "$num is a prime Number";
    }else{
        echo "$num is a not prime Number";
    }
}else{
    echo "The Number is not a prime Number";
}

?>