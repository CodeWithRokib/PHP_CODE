<?php
function longestPalindrome($s) {
    $n = strlen($s);
    if ($n < 2) return $s;  

    $start = 0;
    $maxLength = 1;

    function expandAroundCenter($s, $left, $right, &$start, &$maxLength) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            if ($right - $left + 1 > $maxLength) {
                $start = $left;
                $maxLength = $right - $left + 1;
            }
            $left--;
            $right++;
        }
    }
    for ($i = 0; $i < $n; $i++) {
        expandAroundCenter($s, $i, $i, $start, $maxLength);      
        expandAroundCenter($s, $i, $i + 1, $start, $maxLength);  
    }

    return substr($s, $start, $maxLength);
}

echo longestPalindrome("babad"); 
echo longestPalindrome("cbbd");  