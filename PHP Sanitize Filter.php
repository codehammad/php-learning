<?php
// Sanatize Correct or remove Incorrect Data
// FILTER_SANITIZE_EMAIL
$var = "(example//)@gmail.com";

$var = filter_var($var, FILTER_SANITIZE_EMAIL);
if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
    echo "$var is a valid URL.";
} else {
    echo "$var is not a valid URL.";
}

echo "<br><br>";

// FILTER_SANITIZE_URL
$var = "https://e   xa mp le .c om";

$var = filter_var($var, FILTER_SANITIZE_URL);
if (filter_var($var, FILTER_VALIDATE_URL)) {
    echo "$var is a valid URL.";
} else {
    echo "$var is not a valid URL.";
}

echo "<br><br>";

// FILTER_SANITIZE_NUMBER_INT
$var = "123abc456";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
if ($var) {
    echo "$var is a valid integer.";
} else {
    echo "$var is not valid integer.";
}

echo "<br><br>";

// FILTER_SANITIZE_NUMBER_FLOAT
$var = "123.45abc67.89";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);// FILTER_FLAG_ALLOW_FRACTION Flag sa ya fraction ko accept karayga
if ($var) {
    echo "$var is a valid float.";
} else {
    echo "$var is not a valid float.";
}

echo "<br><br>";

// FILTER_SANITIZE_STRING   also remove special char
$var = "<h1>Hammad FayyazŠœ</h1>";

echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);


echo "<br><br>";

// FILTER_SANITIZE_ENCODE  ya encoded form ma kar da ga
$var = "<h1>Hammad & FayyazŠœ</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH);// also flag for remove special char


echo "<br><br>";

// FILTER_SANITIZE_SPECIAL_CHAR  convert into entity code into source code
$var = "<h1>Hammad & FayyazŠœ</h1>";

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);


echo "<br><br>";

?>