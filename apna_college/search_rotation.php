<?php
function search($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

       
        if ($nums[$mid] === $target) {
            return $mid; 
        }

        
        if ($nums[$left] <= $nums[$mid]) { 
            if ($target >= $nums[$left] && $target < $nums[$mid]) {
                $right = $mid - 1; 
            } else {
                $left = $mid + 1; 
            }
        } else { 
            if ($target > $nums[$mid] && $target <= $nums[$right]) {
                $left = $mid + 1; 
            } else {
                $right = $mid - 1;
            }
        }
    }

    return -1; 
}

$nums = [4, 5, 6, 7, 0, 1, 2];
$target1 = 0;
$target2 = 3;

echo "Index of target $target1: " . search($nums, $target1) . "\n"; 
echo "Index of target $target2: " . search($nums, $target2) . "\n"; 
?>
