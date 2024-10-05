<?php
/* checkdate(month, day, year) */
/* The date_diff() function returns the difference between two DateTime objects.
Syntax: date_diff(datetime1, datetime2, absolute) */

// Checkdate Function

echo checkdate(2, 15, 2014). "<br>";
echo checkdate(2, 29, 2014). "<br>";
echo checkdate(2, 15, 2024). "<br>";

// Date Difference Function------- *
$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");
$diff = date_diff($date1,$date2);

echo $diff->days . "days";
echo "<pre>";
print_r($diff);
echo "</pre>";

// show diffrence in negative
$date1 = date_create("2013-12-15");
$date2 = date_create("2013-03-12");
$diff = date_diff($date1,$date2);

echo $diff->format("%R%a %m days");
echo "<pre>";
print_r($diff);
echo "</pre>";


?>