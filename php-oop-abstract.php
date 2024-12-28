<?php
// Abstract Class: An abstract class is a class that cannot be instantiated on its own. 
// It is used to define common methods and properties that other classes must implement. 
// An abstract class can have abstract methods, which are methods that are declared but not defined in the abstract class. 
// The child class must provide the implementation for these abstract methods.

abstract class parentClass {
    public $name;

    // Abstract method declaration (no implementation here, child class must define it)
    abstract protected function calc($a, $b);
}

// Child class that extends the abstract parent class
class childClass extends parentClass {
    // Providing the implementation of the abstract method 'calc' in the child class
    public function calc($c, $d) {
        echo $c + $d; // This method adds $c and $d and displays the result
    }
}

// Create an instance of the child class and call the calc method
$test = new childClass();

// Call the calc method with arguments
$test->calc(80, 20);
?>
