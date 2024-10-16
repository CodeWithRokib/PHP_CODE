<?php
function groupAnagrams($strs) {
    $map = [];

    foreach ($strs as $str) {
        $sortedStr = str_split($str);
        sort($sortedStr);
        $sortedStr = implode('', $sortedStr);

        if (!isset($map[$sortedStr])) {
            $map[$sortedStr] = [];
        }

        $map[$sortedStr][] = $str;
    }

    return array_values($map);
}

print_r(groupAnagrams(["eat","tea","tan","ate","nat","bat"]));