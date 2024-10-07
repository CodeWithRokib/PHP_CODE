<?php
function isPalindrome($s) {
    $cleanedString = strtolower(preg_replace("/[^a-z0-9]/i", "", $s));
    
    return $cleanedString === strrev($cleanedString);
}

// Example usage
var_dump(isPalindrome("A man, a plan, a canal: Panama")); // bool(true)
var_dump(isPalindrome("race a car")); // bool(false)
