<?php

$a = 2;
$b = 10;
$size = abs($b - $a) + 1;
$array = array_fill(0, $size, 0);

// Iterate through a to b, 
// If it is a multiple of
// 2 or 5 Mark index in
// array as 1
for ($i = $a; $i <= $b; $i++)
	if ($i % 2 == 0 || $i % 5 == 0)
		$array[$i - $a] = 1;

echo "MULTIPLES of 2 and 5:\n";
for ($i = $a; $i <= $b; $i++)
	if ($array[$i - $a] == 1)
		echo $i . " ";

