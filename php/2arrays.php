<?php
// Creating an indexed array
$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[0] . "\n"; // Outputs: Apple
echo $fruits[1] . "\n"; // Outputs: Banana
echo $fruits[2] . "\n"; // Outputs: Cherry

// Creating an associative array
$ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "Peter is " . $ages['Peter'] . " years old.\n"; // Outputs: Peter is 35 years old.

// Creating a multidimensional array
$families = array(
    "Griffin" => array(
        "Peter",
        "Lois",
        "Megan"
    ),
    "Quagmire" => array(
        "Glenn"
    ),
    "Brown" => array(
        "Cleveland",
        "Loretta",
        "Junior"
    )
);
echo $families['Griffin'][0] . "\n"; // Outputs: Peter
echo $families['Brown'][2] . "\n"; // Outputs: Junior

$numbers = array(1, 2, 3, 4, 5);

// Count the number of elements in the array
echo count($numbers) . "\n"; // Outputs: 5

// Add an element to the end of the array
array_push($numbers, 6);
print_r($numbers); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

// Remove the last element of the array
array_pop($numbers);
print_r($numbers); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


// The print_r function in PHP is used to print human-readable information about a variable
// it can display the contents of arrays and objects in a structured and readable format.