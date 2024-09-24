<?php
function printDiamondButterfly($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "  *  ";
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }

    for ($i = $rows - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
$rows = 10;
printDiamondButterfly($rows);