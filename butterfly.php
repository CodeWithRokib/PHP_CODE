<?php
function printButterfly($n) {
    // Upper part of the butterfly
    for ($i = 1; $i <= $n; $i++) {
        // Left half of the butterfly
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        // Spaces in the middle
        for ($j = 1; $j <= 2 * ($n - $i); $j++) {
            echo "&nbsp;";
        }
        // Right half of the butterfly
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    // Lower part of the butterfly
    for ($i = $n; $i >= 1; $i--) {
        // Left half of the butterfly
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        // Spaces in the middle
        for ($j = 1; $j <= 2 * ($n - $i); $j++) {
            echo "&nbsp;";
        }
        // Right half of the butterfly
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Example usage:
$n = 5; // Change this value for a larger or smaller butterfly
printButterfly($n);
?>
