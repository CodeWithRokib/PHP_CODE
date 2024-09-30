<?php

function trap($height) {
    if (count($height) === 0) return 0;  // If the array is empty, no water can be trapped

    $left = 0;                   // Left pointer
    $right = count($height) - 1;  // Right pointer
    $leftMax = 0;                 // Maximum height from the left
    $rightMax = 0;                // Maximum height from the right
    $totalWater = 0;              // Total water trapped

    while ($left < $right) {
        if ($height[$left] < $height[$right]) {
            if ($height[$left] >= $leftMax) {
                $leftMax = $height[$left];  // Update the left max
            } else {
                $totalWater += $leftMax - $height[$left];  // Calculate water trapped
            }
            $left++;  // Move left pointer to the right
        } else {
            if ($height[$right] >= $rightMax) {
                $rightMax = $height[$right];  // Update the right max
            } else {
                $totalWater += $rightMax - $height[$right];  // Calculate water trapped
            }
            $right--;  // Move right pointer to the left
        }
    }

    return $totalWater;
}

// Example usage:
$height = [0, 1, 0, 2, 1, 0];
