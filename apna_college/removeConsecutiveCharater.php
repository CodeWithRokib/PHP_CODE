<?php
function removeConsecutiveDuplicates($s) {
    $result = '';
    $length = strlen($s);
    
    for ($i = 0; $i < $length; $i++) {
        if ($i == 0 || $s[$i] !== $s[$i - 1]) {
            $result .= $s[$i];
        }
    }
    
    return $result;
}

echo removeConsecutiveDuplicates("aabbcc");   // "abc"
echo removeConsecutiveDuplicates("aabaa");    // "aba"
echo removeConsecutiveDuplicates("abccba");   // "abccba"
