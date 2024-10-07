<?php
function isAnagram($s, $t) {
    if (strlen($s) !== strlen($t)) {
        return false;
    }

    $sSorted = str_split($s);
    sort($sSorted);
    
    $tSorted = str_split($t);
    sort($tSorted);
    
    return $sSorted === $tSorted;
}

var_dump(isAnagram("anagram", "nagaram")); // bool(true)
var_dump(isAnagram("rat", "car")); // bool(false)
