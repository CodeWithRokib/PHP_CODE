<?php
// Custom comparison function
function myCompare($X, $Y) {
    // Compare two concatenated results
    if ($X . $Y > $Y . $X) {
        return -1;
    } else {
        return 1;
    }
}

function largestNumber($arr) {
    // Sort the array with the custom comparator
    usort($arr, "myCompare");

    // Concatenate the sorted array
    $result = '';
    foreach ($arr as $num) {
        $result .= $num;
    }

    // Handle the case where all numbers are zero
    if ($result[0] === '0') {
        return '0';
    }

    return $result;
}

// Example usage
$arr1 = ["3", "30", "34", "5", "9"];
echo largestNumber($arr1) . "\n";  // Output: "9534330"

$arr2 = ["54", "546", "548", "60"];
echo largestNumber($arr2) . "\n";  // Output: "6054854654"
