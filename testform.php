<?php
// Get Function
echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo $_GET["fname"];

// Post Function
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // echo $_POST["fname"];

// Request Function
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    echo $_REQUEST["fname"];
    echo $_REQUEST["age"];

?>