<?php
/* The date_time_set() function sets the time.
Syntax: date_time_set(object, hour, minute, second, microseconds)*/

// Date Time Set Function
$date = date_create("2012-02-12");

date_time_set($date, 13,20);
echo date_format($date, "d-m-Y H:i:s")."<br>";
date_time_set($date, 05, 20, 45);
echo date_format($date, "d-m-Y H:i:s");
?>

