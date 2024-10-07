<?php
/* Syntax            all return array
getdate(timestamp)
Syntax
localtime(timestamp, is_assoc)

The gettimeofday() function returns the current time.
Syntax
gettimeofday(return_float) */

$olddate = mktime(0,0,0,05,15,2022);
$date = getdate($olddate);

echo $date["month"]. " - " . $date["year"];

// Get Date Function
echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";

// Get Time OF Day Function
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

$date = gettimeofday();
echo $date["sec"]. "<br>";

echo gettimeofday(true);// true for float data

// Local Time Function
echo "<pre>";
print_r(localtime(time(),true));  // true for data show in associative array
echo "</pre>";

$olddate = mktime(0,0,0,05,15,2022);
echo "<pre>";
print_r(localtime($olddate,true));
echo "</pre>";
