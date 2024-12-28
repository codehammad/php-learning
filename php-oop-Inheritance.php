<?php
// Inheritance: Inheritance is a feature of Object-Oriented Programming (OOP) where one class (child class) 
// can inherit the properties and methods from another class (parent class). 
// This allows the child class to reuse code from the parent class and add or modify its own specific functionality.

class employee {
    public $name;
    public $age;
    public $salary;

    // Constructor to initialize employee details
    function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    // Method to display employee information
    function info() {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }
}

// Child class 'manager' inherits from parent class 'employee'
class manager extends employee {
    public $ta = 1000;  // Additional property for manager
    public $phone = 300;  // Additional property for manager
    public $totalSalary;

    // Overridden info method to include extra details for manager
    function info() {
        $this->totalSalary = $this->salary + $this->ta + $this->phone; // Calculate total salary for manager

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->totalSalary . "<br>";
    }
}

// Creating objects of the 'manager' and 'employee' classes
$e1 = new manager("Hammad", 25, 10000);
$e2 = new employee("Hamza", 27, 3000);

// Calling the 'info' method to display details of both objects
$e1->info();  // Displays manager's details
$e2->info();  // Displays employee's details
?>
