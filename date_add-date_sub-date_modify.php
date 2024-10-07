<?php
/* Syntax:
date_add(object, interval)
Syntax
date_sub(object, interval)
Syntax
date_modify(object, modify)*/

// Date Add Function
$date = date_create("2015-05-15");
date_add($date,date_interval_create_from_date_string("30days"));

echo date_format($date, "d-m-Y"). "<br>";

// Date Subtract Function
$date = date_create("2015-05-15");
date_sub($date,date_interval_create_from_date_string("10days"));

echo date_format($date, "d-m-Y"). "<br>";

// Date Modify Function
$date = date_create("2015-05-15");
date_modify($date,"10days");

echo date_format($date, "d-m-Y"). "<br>";

?>