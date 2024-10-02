<?php

function findPairWithSum($arr, $n, $sum) {
    $pivot = findPivot($arr, $n);
    
    $left = ($pivot + 1) % $n; // The smallest element (after rotation)
    $right = $pivot;           // The largest element (before rotation)
    
    while ($left != $right) {
        $currentSum = $arr[$left] + $arr[$right];
        
        if ($currentSum == $sum) {
            return true;
        }
        
        // Move the left pointer clockwise if the sum is less
        if ($currentSum < $sum) {
            $left = ($left + 1) % $n;
        }
        // Move the right pointer counterclockwise if the sum is more
        else {
            $right = ($n + $right - 1) % $n;
        }
    }
    
    return false;
}

function findPivot($arr, $n) {
    for ($i = 0; $i < $n - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            return $i;
        }
    }
    return $n - 1;
}

// Example usage:
$arr = [11, 15, 6, 8, 9, 10];
$sum = 16;
echo (findPairWithSum($arr, count($arr), $sum) ? "true" : "false") . "\n"; // Output: true

$arr = [4, 5, 6, 7, 8, 1, 2, 3];
$sum = 10;
echo (findPairWithSum($arr, count($arr), $sum) ? "true" : "false") . "\n"; // Output: true

$arr = [1, 2, 3, 4, 5];
$sum = 8;
echo (findPairWithSum($arr, count($arr), $sum) ? "true" : "false") . "\n"; // Output: true

?>
