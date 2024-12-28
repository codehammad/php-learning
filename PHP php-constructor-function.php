<?php
// Constructor Function: A special function that is automatically called when an object is created. 
// It is used to initialize the object's properties with default or provided values.
class person
{
    public $name, $age; // use call also asign default values of properties like $name = "Hammad";

    // constructor function auto call ho jata ha
    function __construct($n = "No Name",$age = 18)
    {
        $this->name = $n;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . "-" . $this->age . "<br>";
    }
}

$p1 = new person("Hammad Fayyaz",20);

// in constructor function we do not need value assigning
/*$p1->name = "Hammad Fayyaz";
$p1->age = 20;*/

$p2 = new person(); // age in case argument na do to ya uper default value la ga

$p1->show();
$p2->show();
?>
