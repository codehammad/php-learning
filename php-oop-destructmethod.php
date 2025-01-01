<?php
// Destruct Method: The __destruct() method in PHP is a special method that is automatically called when an object is destroyed or when the script ends
class abc
{
    public function __construct()
    {
        echo "This is Construct function\n";
    }

    public function hello()
    {
        echo "Hello Everyone\n";
    }

    public function __destruct()
    {
        echo "This is destruct function\n";
    }
}

$test = new abc();
$test->hello();
?>