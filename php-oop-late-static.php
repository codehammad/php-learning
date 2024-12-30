<?php
// Late Static Binding (LSB) is a way to access static properties or methods 
// from the class that is calling the method, not just the class where the method is defined.

// Use the 'static' keyword instead of 'self' to refer to the calling class in inheritance.


class base{

    protected static $name = "Fayyaz";

    public function show(){
        echo static::$name; // Use 'static' instead of 'self' to refer to the derived class's static property
    }

}

class derived extends base{
    protected static $name = "Hammad";
}

$test = new derived();

$test->show();

?>