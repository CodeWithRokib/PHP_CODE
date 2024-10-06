<?php
function mergeOverlap($arr) {
    // Sort intervals based on start values
    usort($arr, function($a, $b) {
        return $a[0] - $b[0];
    });

    $res = [$arr[0]];

    for ($i = 1; $i < count($arr); $i++) {
        $last = $res[count($res) - 1];
        $curr = $arr[$i];

        // If current overlaps with the last merged, merge them
        if ($curr[0] <= $last[1]) {
            $res[count($res) - 1][1] = max($last[1], $curr[1]);
        } else {
            // Add current to the result
            $res[] = $curr;
        }
    }

    return $res;
}

// Driver Code
$arr = [[6, 8], [1, 9], [2, 4], [4, 7]];
$res = mergeOverlap($arr);

echo "The Merged Intervals are:\n";
foreach ($res as $interval) {
    echo "[" . $interval[0] . ", " . $interval[1] . "]\n";
}
?>
