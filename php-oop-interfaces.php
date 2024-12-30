<?php
// Interface Definition:
// An interface in PHP is a contract that defines the methods a class must implement, 
// but does not provide any method implementation. 
// It allows multiple classes to agree on the method signatures that they must have, 
// ensuring consistency between them. 
// A class that implements an interface must define all the methods declared in that interface.

interface parent1
{
    function add($a, $b);
}

interface parent2
{
    function sub($c, $d);
}

class childClass implements parent1, parent2
{

    public function add($a, $b)
    {
        echo $a + $b;
    }

    public function sub($c, $d)
    {
        echo $c - $d;
    }
}

//$test1 = new parent1(); // you cannot make object of interface
$test1 = new childClass();

$test1->add(10, 40);
echo "<br>";
$test1->sub(2, 10);

?>
