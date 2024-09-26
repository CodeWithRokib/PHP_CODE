<?php
function maxSubArray($nums) {
    $maxSoFar = $nums[0]; 
    $maxEndingHere = $nums[0]; 

    for ($i = 1; $i < count($nums); $i++) {
        $maxEndingHere = max($nums[$i], $maxEndingHere + $nums[$i]);
        
        $maxSoFar = max($maxSoFar, $maxEndingHere);
    }
    
    return $maxSoFar;
}
$array = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
$result = maxSubArray($array);
echo "Maximum Subarray Sum: " . $result . PHP_EOL;

