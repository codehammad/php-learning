<?php
// The __sleep() method in PHP is a magic method used during serialization to specify which object properties should be serialized.
class student
{
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep()
    {
        return array('first_name', 'last_name');// its ignore not defined property
    }
}

$obj = new student();

$obj->setName("Hammad", "Fayyaz");
$srl = serialize($obj);

echo $srl;
