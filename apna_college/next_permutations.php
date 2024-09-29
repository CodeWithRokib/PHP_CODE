<?php
function nextPermutation(&$nums) {
    $i = count($nums) - 2;
    while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) {
        $i--;
    }
    
    if ($i >= 0) {
        $j = count($nums) - 1;
        while ($nums[$j] <= $nums[$i]) {
            $j--;
        }

        list($nums[$i], $nums[$j]) = array($nums[$j], $nums[$i]);
    }
    
    $left = $i + 1;
    $right = count($nums) - 1;
    while ($left < $right) {
        list($nums[$left], $nums[$right]) = array($nums[$right], $nums[$left]);
        $left++;
        $right--;
    }
}

$nums = [1, 2, 3];
nextPermutation($nums);
print_r($nums);  // Output: [1, 3, 2]

$nums = [3, 2, 1];
nextPermutation($nums);
print_r($nums);  // Output: [1, 2, 3]

$nums = [1, 1, 5];
nextPermutation($nums);
print_r($nums);  // Output: [1, 5, 1]
