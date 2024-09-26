<?php

function findMinDiff($arr, $n, $m)
{
	if ($m == 0 || $n == 0)
		return 0;
sort($arr);

	if ($n < $m)
	return -1;
	$min_diff = PHP_INT_MAX;
	for ($i = 0; 
		$i + $m - 1 < $n; $i++)
	{
		$diff = $arr[$i + $m - 1] -
				$arr[$i];
		if ($diff < $min_diff)
			$min_diff = $diff;
	}
	return $min_diff;
}

$arr = array(12, 4, 7, 9, 2, 23, 
			25, 41, 30, 40, 28, 
			42, 30, 44, 48, 43, 50);
			
$m = 7; 
$n = sizeof($arr);
echo "Minimum difference is ",
	findMinDiff($arr, $n, $m);

