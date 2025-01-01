<?php

function autoload($class) {
    // Check if the class exists in either of the files
    require 'classes/' . $class . '.php';
}

// Register the autoload function
spl_autoload_register('autoload');

$test = new first();

$test1 = new second();
?>