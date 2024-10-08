<?php
// Get Function
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

// Server Variable
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER["PHP_SELF"];
    echo $_SERVER["HTTP_HOST"];
?>