<?php 

function printSequence(&$arr, $input)
{
	$output = "";

	// length of input string
	$n = strlen($input);
	for ($i = 0; $i < $n; $i++)
	{
		// Checking for space
		if ($input[$i] == ' ')
			$output = $output + "0";

		else
		{
			// Calculating index for each 
			// character
			$position = ord($input[$i]) - ord('A');
			$output = $output . $arr[$position];
		}
	}

	// Output sequence
	return $output;
}

$str = array("2","22","222", "3","33","333",
			"4","44","444", "5","55","555",
			"6","66","666", "7","77","777","7777",
			"8","88","888", "9","99","999","9999");

$input = "GEEKSFORGEEKS";
echo printSequence($str, $input);

