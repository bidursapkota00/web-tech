<?php
function addNumbers($a = 0, $b = 0)
{
    return $a + $b;
}
// Calling the function
$result = addNumbers(5, 10);
echo $result;  // Output: 15

$greet = function ($name) {
    echo "Hello, $name!";
};

$greet("World");  // Output: Hello, World!
