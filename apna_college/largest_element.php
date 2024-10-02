<?php
class MinHeap {
    private $heap;

    public function __construct() {
        $this->heap = [];
    }

    // Insert a value into the heap
    public function insert($val) {
        $this->heap[] = $val;
        $this->bubbleUp();
    }

    // Bubble up the last element to its correct position
    private function bubbleUp() {
        $index = count($this->heap) - 1;
        $element = $this->heap[$index];

        while ($index > 0) {
            $parentIndex = intval(($index - 1) / 2);
            $parent = $this->heap[$parentIndex];

            if ($element >= $parent) break;

            // Swap with the parent
            $this->heap[$index] = $parent;
            $index = $parentIndex;
        }
        $this->heap[$index] = $element;
    }

    // Extract the minimum (root) element from the heap
    public function extractMin() {
        $min = $this->heap[0];
        $end = array_pop($this->heap);

        if (count($this->heap) > 0) {
            $this->heap[0] = $end;
            $this->sinkDown(0);
        }

        return $min;
    }

    // Sink down the root element to its correct position
    private function sinkDown($index) {
        $length = count($this->heap);
        $element = $this->heap[$index];

        while (true) {
            $leftIdx = 2 * $index + 1;
            $rightIdx = 2 * $index + 2;
            $left = $right = null;
            $swap = null;

            if ($leftIdx < $length) {
                $left = $this->heap[$leftIdx];
                if ($left < $element) {
                    $swap = $leftIdx;
                }
            }

            if ($rightIdx < $length) {
                $right = $this->heap[$rightIdx];
                if (($swap === null && $right < $element) || ($swap !== null && $right < $left)) {
                    $swap = $rightIdx;
                }
            }

            if ($swap === null) break;

            // Swap with the child
            $this->heap[$index] = $this->heap[$swap];
            $index = $swap;
        }

        $this->heap[$index] = $element;
    }

    // Return the size of the heap
    public function size() {
        return count($this->heap);
    }
}

function findKthLargest($nums, $k) {
    $heap = new MinHeap();

    foreach ($nums as $num) {
        $heap->insert($num);
        if ($heap->size() > $k) {
            $heap->extractMin();
        }
    }

    return $heap->extractMin();
}

// Example usage:
$nums = [3, 2, 3, 1, 2, 4, 5, 5, 6];
$k = 4;
echo findKthLargest($nums, $k);  // Output: 4
