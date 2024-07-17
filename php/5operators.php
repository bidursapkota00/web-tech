<?php
echo 2 ** 3;
echo "\n";

echo 10 % 7;
echo "\n";

$a = 2;
$a **= 3;
echo $a;
echo "\n";

echo 5 <=> 10;
echo "\n";
echo 5 <=> 5;
echo "\n";
echo 10 <=> 5;
echo "\n";

$a1 = true && false and true; // $a is false
$b1 = true and false && true; // $b is true
$c1 = false or true && true; // $c is false
$d1 = true and false;
$e1 = false or true;
var_dump($a1, $b1, $c1, $d1, $e1);

if (true and true && true or false) {   // && > || > = > and > or 
    echo "hello or gate\n";
} else {
    echo "hello not gate\n";
}

$a2 = "apple";
$a2 .= " ball";
var_dump($a2);

class MyClass
{
}
$myObject = new MyClass();
if ($myObject instanceof MyClass) {
    echo 'Yes, $myObject is an instance of MyClass.';
} else {
    echo 'No, $myObject is not an instance of MyClass.';
}
echo "\n";

// $a = 3;
// echo gettype($a);

$file = @fopen("php\\examples.txt", "r");


$listing = `cd php && dir`;
// echo $listing;

$left;
$right = 20;
$result = $left ?? $right;
// $result = isset($left) ? $left : $right;
var_dump($result);


// + Union of arrays
// Combines two arrays, but only includes elements from the first array
//  that are not present in the second array
$arr1 = array("phy" => 70, "che" => 80, "math" => 90);
$arr2 = array("Eng" => 70, "Bio" => 80, "CompSci" => 90, "phy" => 60);
$arr3 = $arr1 + $arr2;
var_dump($arr3);

// == Equality
// Returns true if $x and $y have the same key/value pairs
$array3 = [1, 2, 3];
$array4 = [1, 2, 3];
$resultEqual = ($array3 == $array4);
var_dump($resultEqual); // Output: bool(true)

// === Identity
// Returns true if $x and $y have the same key/value pairs in the same order
//  and of the same types
$resultIdentical = ($array3 === $array4);
var_dump($resultIdentical); // Output: bool(true)

// != Inequality
$array5 = [1, 2, 3];
$array6 = [4, 5, 6];
$resultNotEqual = ($array5 != $array6);
var_dump($resultNotEqual); // Output: bool(true)

// <> Inequality
$resultNotEqualAlt = ($array5 <> $array6);
var_dump($resultNotEqualAlt); // Output: bool(true)

// !== Non-identity
$resultNotIdentical = ($array5 !== $array6);
var_dump($resultNotIdentical); // Output: bool(true)
