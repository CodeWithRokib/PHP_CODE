<?php
class Query {
    public $L;
    public $R;

    public function __construct($L, $R) {
        $this->L = $L;
        $this->R = $R;
    }
}

function printQuerySums($a, $n, $q, $m) {
    // One by one compute sum of all queries
    for ($i = 0; $i < $m; $i++) {
        // Left and right boundaries of current range
        $L = $q[$i]->L;
        $R = $q[$i]->R;

        // Compute sum of current query range
        $sum = 0;
        for ($j = $L; $j <= $R; $j++) {
            $sum += $a[$j];
        }

        // Print sum of current query range
        echo "Sum of [$L, $R] is $sum<br>";
    }
}

// Driver program
$a = [1, 1, 2, 1, 3, 4, 5, 2, 8];
$n = count($a);

$q = [];
$q[] = new Query(0, 4);
$q[] = new Query(1, 3);
$q[] = new Query(2, 4);

$m = count($q);
printQuerySums($a, $n, $q, $m);

