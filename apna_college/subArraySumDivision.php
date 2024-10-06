<?php

function longestSubarrWthSumDivByK($arr, $N, $k) {
    $maxl = 0;
    for ($i = 0; $i < $N; $i++) {
        $sum1 = 0;
        for ($j = $i; $j < $N; $j++) {
            $sum1 += $arr[$j];
            if ($sum1 % $k === 0) {
                $maxl = max($maxl, $j - $i + 1);
            }
        }
    }
    return $maxl;
}

// Driver code
$arr = [2, 7, 6, 1, 4, 5];
$N = count($arr);
$k = 3;
echo "Length = " . longestSubarrWthSumDivByK($arr, $N, $k);

