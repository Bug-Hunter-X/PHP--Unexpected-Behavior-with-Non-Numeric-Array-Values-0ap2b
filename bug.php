```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  $sum = 0;
  foreach ($arr as $value) {
    $sum += $value;
  }

  return $sum / count($arr);
}

// Example usage
$numbers = [10, 20, 30, 40, 50];
$average = buggyFunction($numbers);
echo "Average: " . $average; // Output: Average: 30

$emptyArray = [];
echo "Average of Empty Array: " . buggyFunction($emptyArray); // Output: Average of Empty Array: 0

//Example with non-numeric values
$mixedArray = [10, 'a', 20, 30];
$average = buggyFunction($mixedArray); //Notice: A non well formed numeric value encountered
echo "Average of mixed array: " . $average; //Output: Average of mixed array: NaN
```