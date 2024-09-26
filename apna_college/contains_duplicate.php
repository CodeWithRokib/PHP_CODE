<?php
function containsDuplicate($nums) {
    $seen = []; 

    foreach ($nums as $num) {
        if (isset($seen[$num])) {
            return true;
        }
        $seen[$num] = true; 
    }

    return false;
}

$array1 = [1, 2, 3, 1];
$result1 = containsDuplicate($array1);
echo $result1 ? 'true' : 'false'; 

$array2 = [1, 2, 3, 4];
$result2 = containsDuplicate($array2);
echo $result2 ? 'true' : 'false'; 
