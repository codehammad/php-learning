<?php
// Time Zone Function
echo date_default_timezone_get(). "<br>";

date_default_timezone_set("Asia/Karachi");
echo date_default_timezone_get(). "<br>";

// Time Zone Open Function
$tz = timezone_open("Asia/Karachi");
echo timezone_name_get($tz). "<br>";

echo "<pre>";
print_r(timezone_location_get($tz));// array with coordinates
echo "</pre>";

$tz = timezone_open("Europe/Paris");
echo timezone_name_get($tz). "<br>";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

// Time Zone Identifiers List Function
echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
?>