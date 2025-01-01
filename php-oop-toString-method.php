<?php
// __toString() allows you to specify what should be shown when an object is treated as a string (like in echo or print
class abc{
    public function __toString()
    {
        return "Can't print object as a String of Class :" . get_class($this);
    }
}

$test = new abc();

echo $test;

?>