<?php
// __LINE__ gives the current line number in the script
echo "This is line number: " . __LINE__;

// __FILE__ gives the full path and filename of the current file
echo "This file is located at: " . __FILE__;

// __DIR__ gives the directory of the current file
echo "This file is located in directory: " . __DIR__;

// Define a trait
trait MyTrait {
    // __TRAIT__ gives the name of the trait
    function showTrait() {
        echo "This trait is: " . __TRAIT__;
    }
}

// Define a namespace
namespace MyNamespace;

// Define a class
class MyClass {
    // __METHOD__ gives the full name of the current method (class + method name)
    function myMethod() {
        echo "This method is: " . __METHOD__;
    }

    // __CLASS__ gives the name of the current class
    // __FUNCTION__ gives the name of the current function
    function displayClass() {
        echo "This class is: " . __CLASS__;
        echo "This function is: " . __FUNCTION__;
    }
}

// __NAMESPACE__ gives the name of the current namespace
echo "This namespace is: " . __NAMESPACE__;

// Create an object of MyClass and call its methods
$obj = new MyClass();
$obj->myMethod();
$obj->displayClass();

?>
