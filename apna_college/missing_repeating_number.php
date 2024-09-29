<?php
function findMissingAndRepeating($arr) {
    $n = count($arr);

    // Calculate the expected sum and sum of squares for numbers 1 to n
    $expectedSum = ($n * ($n + 1)) / 2;
    $expectedSumOfSquares = ($n * ($n + 1) * (2 * $n + 1)) / 6;

    // Calculate actual sum and sum of squares from the array
    $actualSum = 0;
    $actualSumOfSquares = 0;

    foreach ($arr as $value) {
        $actualSum += $value;
        $actualSumOfSquares += $value * $value;
    }

    // Difference between expected and actual sums
    $sumDiff = $expectedSum - $actualSum; // Y - X
    $squareSumDiff = $expectedSumOfSquares - $actualSumOfSquares; // Y^2 - X^2

    // We know that (Y^2 - X^2) = (Y - X)(Y + X)
    // Therefore, squareSumDiff = sumDiff * (Y + X)
    $sumPlusDiff = $squareSumDiff / $sumDiff; // Y + X

    // Now we have two equations:
    // sumDiff = Y - X
    // sumPlusDiff = Y + X
    // Solving for X and Y:
    $X = ($sumPlusDiff - $sumDiff) / 2;
    $Y = ($sumPlusDiff + $sumDiff) / 2;

    return ['repeating' => $X, 'missing' => $Y];
}

// Example usage:
$arr = [3, 1, 2, 5, 3];
$result = findMissingAndRepeating($arr);
echo "Repeating: " . $result['repeating'] . ", Missing: " . $result['missing'];
