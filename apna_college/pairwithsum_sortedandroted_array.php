<?php

function findPairWithSum($arr, $X) {
    $n = count($arr);
    
    // Find the pivot point (the index of the smallest element)
    $pivot = findPivot($arr, $n);
    
    // The smallest element (starting point of the rotated array)
    $left = ($pivot + 1) % $n;
    // The largest element (ending point of the rotated array)
    $right = $pivot;
    
    // Use the two-pointer technique to find the pair with the given sum
    while ($left != $right) {
        $currentSum = $arr[$left] + $arr[$right];
        
        // If we found the pair
        if ($currentSum == $X) {
            return true;
        }
        
        // If current sum is less, move the left pointer (increment in circular manner)
        if ($currentSum < $X) {
            $left = ($left + 1) % $n;
        } 
        // If current sum is greater, move the right pointer (decrement in circular manner)
        else {
            $right = ($n + $right - 1) % $n;
        }
    }
    
    // No pair found
    return false;
}

function findPivot($arr, $n) {
    for ($i = 0; $i < $n - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            return $i;
        }
    }
    return $n - 1; // If no pivot, the array is not rotated
}

// Example usage
$arr = [11, 15, 6, 8, 9, 10];
$X = 16;
echo (findPairWithSum($arr, $X) ? "true" : "false") . "\n"; // Output: true

$arr = [11, 15, 26, 38, 9, 10];
$X = 35;
echo (findPairWithSum($arr, $X) ? "true" : "false") . "\n"; // Output: true

$arr = [11, 15, 26, 38, 9, 10];
$X = 45;
echo (findPairWithSum($arr, $X) ? "true" : "false") . "\n"; // Output: false
