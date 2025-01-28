<?php
function calculateSum(array $numbers): float|int
{
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately (e.g., log an error, throw an exception, return an error code)
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
$sum = calculateSum($numbers);
echo "Sum:", $sum; // Output: Sum:15

$numbers2 = [1, 2, "a", 4, 5];
$sum2 = calculateSum($numbers2); //Outputs a warning
echo "Sum:", $sum2; // Output: Sum: 12
?> 