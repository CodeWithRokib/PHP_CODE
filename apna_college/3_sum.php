<?php

function threeSum($nums) {
    $result = [];
    
    // Sort the array
    sort($nums);
    
    $n = count($nums);
    
    for ($i = 0; $i < $n - 2; $i++) {
        // Skip duplicate elements for the first element of the triplet
        if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
            continue;
        }
        
        $left = $i + 1;
        $right = $n - 1;
        
        while ($left < $right) {
            $sum = $nums[$i] + $nums[$left] + $nums[$right];
            
            if ($sum == 0) {
                $result[] = [$nums[$i], $nums[$left], $nums[$right]];
                
                // Skip duplicates for the left pointer
                while ($left < $right && $nums[$left] == $nums[$left + 1]) {
                    $left++;
                }
                
                // Skip duplicates for the right pointer
                while ($left < $right && $nums[$right] == $nums[$right - 1]) {
                    $right--;
                }
                
                // Move both pointers after processing the current valid triplet
                $left++;
                $right--;
            } elseif ($sum < 0) {
                // If sum is less than 0, increment left pointer to increase sum
                $left++;
            } else {
                // If sum is greater than 0, decrement right pointer to decrease sum
                $right--;
            }
        }
    }
    
    return $result;
}

// Example usage:

print_r(threeSum([-1, 0, 1, 2, -1, -4]));
// Output: [[-1, -1, 2], [-1, 0, 1]]

print_r(threeSum([0, 0, 0, 0]));
// Output: [[0, 0, 0]]

print_r(threeSum([-2, 0, 1, 1, 2]));
// Output: [[-2, 0, 2], [-2, 1, 1]]

?>
