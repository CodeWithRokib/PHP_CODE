<?php 
class MinHeap extends SplMinHeap {
    // We are extending SplMinHeap and using its default behavior
}

function findKthLargest($nums, $k) {
    $minHeap = new MinHeap();
    
    // Add elements to the min heap, maintaining size <= k
    foreach ($nums as $num) {
        $minHeap->insert($num);
        if ($minHeap->count() > $k) {
            $minHeap->extract();  // Remove the smallest element to maintain k size
        }
    }
    
    // The top of the min heap is the kth largest element
    return $minHeap->top();
}

// Example usage
$nums = [3, 2, 1, 5, 6, 4];
$k = 2;
echo findKthLargest($nums, $k);  // Output: 5
