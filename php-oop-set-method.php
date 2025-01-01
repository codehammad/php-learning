<?php

class student{
    private $name;

    //this get method called when you tyring to access private property
    public function __get($property){
        echo "You are trying to access private or non-existing property.";
    }

    // set method called when you trying to assign value to private property
    public function __set($property, $value){
        if(property_exists($this , $property)){
           $this->$property = $value; 
        }else{
            echo "Property Does'n Exist.";
        }
    }

    public function show(){
        echo $this->name;
    }

}

$test = new student();

$test->name = "Hamza";

$test->show();

?>