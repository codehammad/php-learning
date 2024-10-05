<?php
/* Syntax
date_create(time, timezone) */
/*Syntax : date_format(object, format) */

// Date Create Function
$date = date_create("2023-03-15 22:25:00",timezone_open("Asia/Karachi"));

// Date Format Function
echo date_format($date,"l"). "<br>";
echo date_format($date,"d/m/Y H:i:s"). "<br>";



?>