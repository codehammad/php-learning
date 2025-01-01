<?php

class student
{
    private $f_name;
    private $l_name;

    private function setName($fname, $lname)
    {
        $this->f_name = $fname;
        $this->l_name = $lname;
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            echo "Method Does Not Exist : $method";
        }
    }
}

$test = new student();

$test->setName("Hammad", "Fayyaz");

echo "<pre>";
print_r($test);
echo "</pre>";

?>
