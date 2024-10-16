<?php

function characterReplacement($s, $k) {
    $left = 0;
    $maxCount = 0;
    $maxLength = 0;
    $count = [];

    for ($right = 0; $right < strlen($s); $right++) {
        $char = $s[$right];
        if (!isset($count[$char])) {
            $count[$char] = 0;
        }
        $count[$char]++;

        $maxCount = max($maxCount, $count[$char]);

        if ($right - $left + 1 - $maxCount > $k) {
            $count[$s[$left]]--;
            $left++;
        }

        $maxLength = max($maxLength, $right - $left + 1);
    }

    return $maxLength;
}

echo characterReplacement("AABABBA", 1);  // Output: 4