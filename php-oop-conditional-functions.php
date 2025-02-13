<?php
// Check if class exists
class MyClass{
}

if(class_exists("MyClass")){
    //echo "This class is exist.";
    $obj = new MyClass();
}else{
    echo "This class is not exist.";
}
echo "<br>";

// Check if interface exists
interface MyInterface{
}

if(interface_exists("MyInterface")){
    echo "This interface is exist.";
    class lo implements MyInterface{
    
    }    
}else{
    echo "This interface is not exist.";
}
echo "<br>";

// Check if method exists
class MyCl{
    public function MyMethod(){
        
    }
}

$obj = new MyCl();

if(method_exists($obj,"MyMethod")){
    echo "This method is exist.";
        
}else{
    echo "This method is not exist.";
}
echo "<br>";

// Check if trait exists
trait MyTrait{
    public function MyMethod(){
        return __TRAIT__;
    }
}

if(trait_exists("MyTrait")){
    //echo "This trait is exist.";
    class My{
        use MyTrait;
    }
}else{
    echo "This trait is not exist.";
}
echo "<br>";

// Check if property exists
class MyC{
    public $test;
}

if(property_exists("MyC","test")){
    echo "This property is exist.";
}else{
    echo "This property is not exist.";
}
echo "<br>";

// Check if object is an instance of a class
class MyCla{
    public $test;
}

$obj = new MyCla();

if(is_a($obj,"MyCla")){
    echo "This Object is of Class MyCla.";
}else{
    echo "This Object is not of Class MyCla.";
}
echo "<br>";

// Check if object is a subclass of another class
class parentClass{
  
}

class childClass extends parentClass{
  
}

$obj = new childClass();

if(is_subclass_of($obj, "parentClass")){
    echo "This \$obj is an object of subclass of parentClass.";
}else{
    echo "This \$obj is not an object of subclass of parentClass.";
}
?>
