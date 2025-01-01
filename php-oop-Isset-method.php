<?php

class student{
    public $course;
    private $f_name;
    private $l_name;
    private $details = ['name'=>"My Name",'age'=>'20'];

    public function setName($fname,$lname){
        $this->f_name = $fname;
        $this->l_name = $lname;
    }

    public function __isset($name)
    {
        //echo isset($this->$name);
        echo isset($this->details[$name]);// display array
    }
}

$test = new student();
$test->course = 'PHP';

//$test->setName("Hammad","Fayyaz");

echo isset($test->age);


?>