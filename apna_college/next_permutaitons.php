<?php
function nextPermutation(&$arr) {
    $n = count($arr);

    $i = $n - 2;
    while ($i >= 0 && $arr[$i] >= $arr[$i + 1]) {
        $i--;
    }

    if ($i >= 0) {
        $j = $n - 1;
        while ($arr[$j] <= $arr[$i]) {
            $j--;
        }
        list($arr[$i], $arr[$j]) = array($arr[$j], $arr[$i]);  // Swap
    }

    $start = $i + 1;
    $end = $n - 1;
    while ($start < $end) {
        list($arr[$start], $arr[$end]) = array($arr[$end], $arr[$start]);
        $start++;
        $end--;
    }

    return $arr;
}

$arr = [1, 2, 3];
print_r(nextPermutation($arr));  

$arr = [3, 2, 1];
print_r(nextPermutation($arr));  

$arr = [1, 1, 5];
print_r(nextPermutation($arr)); 