<?php

function findMin($nums) {
    $left = 0;
    $right = count($nums) - 1;

    // If the array is not rotated (the first element is smaller than the last), return the first element
    if ($nums[$left] <= $nums[$right]) {
        return $nums[$left];
    }

    while ($left <= $right) {
        $mid = intval(($left + $right) / 2);

        // Check if the mid element is the minimum by comparing it to its neighbors
        if ($nums[$mid] > $nums[$mid + 1]) {
            return $nums[$mid + 1];
        }
        if ($nums[$mid] < $nums[$mid - 1]) {
            return $nums[$mid];
        }

        // If the left half is sorted, the minimum must be in the right half
        if ($nums[$mid] >= $nums[$left]) {
            $left = $mid + 1;
        } else {
            // If the right half is sorted, the minimum must be in the left half
            $right = $mid - 1;
        }
    }

    return -1; // Shouldn't reach here in a valid rotated sorted array
}

// Example usage:
$nums = [4, 5, 6, 7, 0, 1, 2];
echo "Minimum element: " . findMin($nums) . "\n"; // Output: 0

$nums = [3, 4, 5, 1, 2];
echo "Minimum element: " . findMin($nums) . "\n"; // Output: 1

$nums = [11, 13, 15, 17];
echo "Minimum element: " . findMin($nums) . "\n"; // Output: 11
