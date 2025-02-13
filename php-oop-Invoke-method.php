<?php
// The __invoke() method in PHP allows an object to be called like a function.
class MyClass
{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    // public function sum()
    // {
    //      echo $this->a + $this->b;
    // }

    // The __invoke method allows the object to be called like a function
    public function __invoke()
    {
        echo $this->a + $this->b;
    }
}

$obj = new MyClass(5, 10);
//echo $obj->sum();

// Call the object as a function, triggering __invoke() method
$obj(); 
?>