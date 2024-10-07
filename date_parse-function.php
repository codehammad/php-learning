<?php
/* The date_parse() function returns an associative array with detailed information about a specified date.
Syntax: date_parse(date) */

// Date Parse Function
echo "<pre>";
print_r(date_parse("2010-03-10 12:30:25.5"));
echo "</pre>";

$date = date_parse("2010-03-10 12:30:25.5");
echo $date["day"];

// Date Parse Form Format Function
echo "<pre>";
print_r(date_parse_from_format("d.n.Y","15.3.2010"));
echo "</pre>";