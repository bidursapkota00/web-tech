<?php
// Scalar Types, data types that can hold only one value at a time
$name = "Bidur"; //String
$age = 25; // Integer
$isStudent = false; // Boolean
$floatVar = 10.5; // Float

// Special Types
$nullVar = NULL; // NULL, A variable with no value assigned
$resourceVar = fopen("file.txt", "r"); // Resource, special variable, holding a reference to an external resource (e.g., database connection)


// Compound Types
$arrayVar = array("apple", "banana", "cherry"); // Array

class Car
{
    public $model;

    public function __construct()
    {
        $this->model = "S";
    }
}
$tesla = new Car();  // Object

print_r($tesla);
