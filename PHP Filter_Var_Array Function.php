<?php
// Filter_Var_Array ya sab field ko ak sath validate ya sanatize (correct) kar sakta ha

$arr = array(
    "stname" => "<h1>Hammad</h1>",
    "stmarks" => "60",
    "stemail" => "example,,//my@email.com"
);

$filters = array(
    "stname" => array(
        "filter" => FILTER_SANITIZE_STRING,// FILTER_SANITIZE_STRING php remove it
        "flags" => FILTER_FLAG_STRIP_HIGH
    ),
    "stmarks" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    ),
    "stemail" => FILTER_SANITIZE_EMAIL
);

echo "<pre>";
print_r(filter_var_array($arr, $filters));
echo "</pre>";
?>