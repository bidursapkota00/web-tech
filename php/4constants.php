<?php
define("PI", 3.14);
define("APP_VERSION", "2.3.1");

echo PI; // Output: 3.14
echo "\n";

// The const keyword is used within classes to define constants.
class MyClass
{
    const VERSION = '1.0.0';
    const AUTHOR = 'John Doe';
}

echo MyClass::VERSION; // Output: 1.0.0
echo "\n";
echo MyClass::AUTHOR; // Output: John Doe
echo "\n";

echo $_SERVER['PHP_SELF']; // Outputs the filename of the currently executing script

$myvar = "Hello";
echo "\n";

function hello()
{
    $myvar = "world";
    echo $GLOBALS['myvar'];
}
hello();
