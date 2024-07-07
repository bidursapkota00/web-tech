<?php
class Car
{
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Methods
    public function getCarInfo()
    {
        return "This car is a {$this->year} {$this->make} {$this->model}.\n";
    }
}

// Create an object
$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2019);

// Access object properties and methods
echo $car1->getCarInfo(); // Outputs: This car is a 2020 Toyota Corolla.
echo $car2->getCarInfo(); // Outputs: This car is a 2019 Honda Civic.