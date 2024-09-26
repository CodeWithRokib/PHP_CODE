<?php
function reverseArray($arr) {
    $start = 0;
    $end = count($arr) - 1;
    
    while ($start < $end) {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        
        $start++;
        $end--;
    }
    
    return $arr;
}

$array = array(1, 2, 3, 4, 5);

echo "Original Array: ";
print_r($array);

$reversedArray = reverseArray($array);

echo "Reversed Array: ";
print_r($reversedArray);

