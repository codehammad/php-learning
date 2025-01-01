<?php
// Method Chaining allows calling multiple methods on the same object in one line. Each method returns the object itself ($this), so you can chain further method calls.
class abc
{

    public function first()
    {
        echo "First Function.<br>";

        return $this; // add this to to use channing method
    }

    public function second()
    {
        echo "Second Function.<br>";

        return $this;
    }

    public function third()
    {
        echo "Third Function.<br>";
    }
}

$test = new abc();

/*$test->first();
$test->second();  | Instead of add separate line to run functions use chaining method.
$test->third();*/

$test->first()->second()->third();
?>
