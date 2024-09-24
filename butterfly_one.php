<?php
function printButterfly($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        for ($j = 1; $j <= 2 * ($rows - $i); $j++) {
            echo " ";
        }

        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

$rows = 10;
printButterfly($rows);