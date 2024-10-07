<?php
function isValid($s) {
    $stack = [];
    $matchingBrackets = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        
        if ($char === '(' || $char === '{' || $char === '[') {
            array_push($stack, $char);
        } else {
            if (empty($stack) || array_pop($stack) !== $matchingBrackets[$char]) {
                return false;
            }
        }
    }

    return empty($stack);
}

var_dump(isValid("()"));    // bool(true)
var_dump(isValid("()[]{}")); // bool(true)
var_dump(isValid("(]"));     // bool(false)
var_dump(isValid("([)]"));   // bool(false)
var_dump(isValid("{[]}"));   // bool(true)
