<?php
function productExceptSelf($nums) {
    $n = count($nums);
    $answer = array_fill(0, $n, 1);  // Initialize the result array with 1s

    // Step 1: Calculate the prefix product for each element
    $prefix = 1;
    for ($i = 0; $i < $n; $i++) {
        $answer[$i] = $prefix;      // Assign the current prefix product to answer[i]
        $prefix *= $nums[$i];       // Update the prefix to include nums[i]
    }

    // Step 2: Calculate the suffix product and multiply it with the prefix product
    $suffix = 1;
    for ($i = $n - 1; $i >= 0; $i--) {
        $answer[$i] *= $suffix;     // Multiply the suffix product with the prefix product
        $suffix *= $nums[$i];       // Update the suffix to include nums[i]
    }

    return $answer;
}

// Example usage:
$nums = [1, 2, 3, 4];
print_r(productExceptSelf($nums));  // Output: [24, 12, 8, 6]
