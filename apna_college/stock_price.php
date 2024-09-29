<?php
function maxProfit($prices) {

    $minPrice = PHP_INT_MAX;
    $maxProfit = 0;
    
    foreach ($prices as $price) {

        if ($price < $minPrice) {
            $minPrice = $price;
        }

        $potentialProfit = $price - $minPrice;
        
        if ($potentialProfit > $maxProfit) {
            $maxProfit = $potentialProfit;
        }
    }
    
    return $maxProfit;
}

$prices = [7, 1, 5, 3, 6, 4];
echo "Max Profit: " . maxProfit($prices) . "\n";  // Output: 5 (Buy at 1, sell at 6)

$prices2 = [7, 6, 4, 3, 1];
echo "Max Profit: " . maxProfit($prices2) . "\n";  // Output: 0 (No profit possible)
