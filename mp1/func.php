<?php

function evenNumbers($numbers)
{
    $evenNumbers = array();
  
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $evenNumbers[] = $number;
        }
    }
  
    return $evenNumbers;
}

// Example usage:
$numbersArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$evenNumbersArray = evenNumbers($numbersArray);

// echo "Original Array: ";
// print_r($numbersArray);

echo "Even Numbers Array:  $evenNumbersArray";
// print_r($evenNumbersArray);
?>
