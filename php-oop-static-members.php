<?php
// Static Members Definition:
// Static members (variables and methods) belong to the class itself, 
// not to instances (objects) of the class. 
// They are shared by all instances of the class, meaning there is only one copy 
// of the static member, regardless of how many objects are created.
// You can access static members using the class name or using an instance (though it's not recommended).

class base{
    public static $name = "Hammad Fayyaz";

    public static function show(){
        echo self::$name;
    }

    public function __construct($n){
        self::$name = $n;
    }
}
// example with inheritance
// class derived extends base{
//     public static function show(){
//         echo parent::$name;
//     }
// }

// echo base::$name;
// base::show();

$test = new base("Wow");

// Inheritance
//$test = new derived();

$test->show();
?>