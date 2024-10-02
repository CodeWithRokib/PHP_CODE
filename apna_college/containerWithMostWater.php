function maxArea(height) {
    let left = 0;
    let right = height.length - 1;
    let maxWater = 0;
    
    while (left < right) {
        // Calculate the area formed between the two pointers
        const currentWater = Math.min(height[left], height[right]) * (right - left);
        maxWater = Math.max(maxWater, currentWater);
        
        // Move the pointer pointing to the shorter line
        if (height[left] < height[right]) {
            left++;
        } else {
            right--;
        }
    }
    
    return maxWater;
}

// Example usage:
console.log(maxArea([1,8,6,2,5,4,8,3,7])); // Output: 49
console.log(maxArea([1,1]));               // Output: 1
console.log(maxArea([4,3,2,1,4]));         // Output: 16
