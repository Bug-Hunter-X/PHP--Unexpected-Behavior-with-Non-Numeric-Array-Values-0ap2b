```php
function improvedBuggyFunction($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  $numericValues = array_filter($arr, 'is_numeric');

  if (empty($numericValues)) {
    return 0; // Handle array with no numeric values
  }

  $sum = array_sum($numericValues);
  return $sum / count($numericValues);
}

// Example usage
$numbers = [10, 20, 30, 40, 50];
$average = improvedBuggyFunction($numbers);
echo "Average: " . $average; // Output: Average: 30

$emptyArray = [];
echo "Average of Empty Array: " . improvedBuggyFunction($emptyArray); // Output: Average of Empty Array: 0

//Example with non-numeric values
$mixedArray = [10, 'a', 20, 30];
$average = improvedBuggyFunction($mixedArray);
echo "Average of mixed array: " . $average; //Output: Average of mixed array: 20
```