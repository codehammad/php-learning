<?php
// class
class calculation
{

    public $a, $b, $c; // properties of class

    // methods of class
    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// object
// object one
$c1 = new calculation();

$c1->a = 10;
$c1->b = 20;


// object two
$c2 = new calculation();

$c2->a = 30;
$c2->b = 56;


echo "Sum Value of C1 : " . $c1->sum() . "<br>";

echo "Sub Value of C2 : " . $c2->sub() . "<br>";

echo "Sub Value of C1 : " . $c1->sub() . "<br>";
?>