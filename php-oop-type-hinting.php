<?php

class school
{
    public function getNames($names)
    {
        foreach ($names->Names() as $name) {
            echo $name . "<br>";
        }
    }
}

class student
{
    public function Names()
    {
        return ["Hammad", "Gohar", "Saim"];
    }
}

$sch = new school();

$stu = new student();

$sch->getNames($stu);

?>