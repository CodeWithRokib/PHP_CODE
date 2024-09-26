<?php
function findMaxMin($arr) {
    if (count($arr) === 0) {
        throw new Exception("Array is empty");
    }
    $max = $arr[0];
    $min = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];  
        }
        if ($arr[$i] < $min) {
            $min = $arr[$i]; 
        }
    }

    return array("max" => $max, "min" => $min);
}

$array = array(3, 5, 7, 2, 8, -1, 4, 10, 12);
$result = findMaxMin($array);
echo "Maximum: " . $result['max'] . ", Minimum: " . $result['min'];
?>
