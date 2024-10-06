<?php

function findMinOps($arr, $n)
{
    // Initialize result
    $ans = 1; 

    // Start from two corners
    for ($i = 0, $j = $n - 1; $i <= $j;)
    {
        // If corner elements are same,
        // problem reduces arr[i+1..j-1]
        if ($arr[$i] == $arr[$j])
        {
            $i++;
            $j--;
        }

        // If left element is greater, then
        // we merge right two elements
        else if ($arr[$i] > $arr[$j])
        {
            // need to merge from tail.
            $j--;
            $arr[$j] += $arr[$j + 1] ;
            $ans++;
        }

        // Else we merge 
        // left two elements
        else
        {
            $i++;
            $arr[$i] += $arr[$i - 1];
            $ans++;
        }
    }

    return $ans;
}

// Driver Code
$arr[] = array(1, 4, 5, 9, 1);
$n = sizeof($arr);
echo "Count of minimum operations is ", 
                 findMinOps($arr, $n) ;


