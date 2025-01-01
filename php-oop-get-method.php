<?php
// The `__get` method is a magic method in PHP that is automatically called when we try to access a private or undefined property of an object.

class abc
{
    private $data = ["name" => "Hammad", "course" => "PHP", "fee" => "1000"];

    public function __get($key)
    {
        // Check if the key exists in the $data array
        if (array_key_exists($key, $this->data)) {
            // If the key exists, return its value
            return $this->data[$key];
        } else {
            // If the key doesn't exist, return a message
            return "This key($key) is not defined.";
        }
    }
}

$test = new abc();

echo $test->course;
?>
