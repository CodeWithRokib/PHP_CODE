<?php
function maxProduct($nums) {
    $n = count($nums);
    if ($n == 0) return 0;  // Edge case: if the array is empty, return 0

    $maxProduct = $nums[0];  // Initialize max product as the first element
    $minProduct = $nums[0];  // Initialize min product as the first element
    $result = $nums[0];      // Initialize the result as the first element

    // Iterate through the array starting from the second element
    for ($i = 1; $i < $n; $i++) {
        $current = $nums[$i];

        // Calculate the maximum and minimum product for the current element
        $tempMax = max($current, $current * $maxProduct, $current * $minProduct);
        $minProduct = min($current, $current * $maxProduct, $current * $minProduct);

        // Update the maxProduct with the temporary max
        $maxProduct = $tempMax;

        // Update the result with the maximum product found so far
        $result = max($result, $maxProduct);
    }

    return $result;
}

// Example usage:
$nums = [2, 3, -2, 4];
echo maxProduct($nums);  // Output: 6

$nums2 = [-2, 0, -1];
echo maxProduct($nums2);  // Output: 0

