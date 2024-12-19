<?php
// FILTER_VALIDATE_INT
$var = 142;
$options = array("options"=> array("min_range" =>20,"max_range" =>30));

var_dump(filter_var($var, FILTER_VALIDATE_INT));
if(filter_var($var, FILTER_VALIDATE_INT, $options)){
    echo "<br> $var is an Integer.";
}else{
    echo "<br> $var is not an Integer.";
}

echo "<br><br>";

// FILTER_VALIDATE_FLOAT
$var = 22.28;

var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));
if(filter_var($var, FILTER_VALIDATE_FLOAT)){
    echo "<br> $var is an Float.";
}else{
    echo "<br> $var is not an Float.";
}

// FILTER_VALIDATE_BOOLEAN
$var = "yes";

var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN));
if(filter_var($var, FILTER_VALIDATE_BOOLEAN)){
    echo "<br> $var is a valid boolean.";
}else{
    echo "<br> $var is not a valid boolean.";
}

echo "<br><br>";

// FILTER_VALIDATE_EMAIL
$var = "example@test.com";

var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));
if(filter_var($var, FILTER_VALIDATE_EMAIL)){
    echo "<br> $var is a valid email address.";
}else{
    echo "<br> $var is not a valid email address.";
}

echo "<br><br>";


// FILTER_VALIDATE_URL
$var = "https://www.example.com";

var_dump(filter_var($var, FILTER_VALIDATE_URL));
if(filter_var($var, FILTER_VALIDATE_URL)){
    echo "<br> $var is a valid URL.";
}else{
    echo "<br> $var is not a valid URL.";
}

echo "<br><br>";

// FILTER_VALIDATE_IP
$var = "192.168.1.100";

var_dump(filter_var($var, FILTER_VALIDATE_IP));
if(filter_var($var, FILTER_VALIDATE_IP)){
    echo "<br> $var is a valid IP address.";
}else{
    echo "<br> $var is not valid IP address.";
}
?>