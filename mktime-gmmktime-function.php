<?php
/* The mktime() function returns the Unix timestamp for a date.
Syntax: mktime(hour, minute, second, month, day, year) */

// MK Time Function
echo "Time & Date : " . date("d-m-Y h:i:sa"). "<br>";

echo date("l",mktime(1,15,0, 10,15, 2010)). "<br>";

echo date("d-m-Y h:i:sa",mktime(1,15,0, 10,15, 2010)). "<br>";

// GMT Time Function
echo date("d-m-Y h:i:sa",mktime(1,15,0, 10,15, 2010))

?>