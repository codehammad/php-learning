<?php
// Time Functions
echo "Hour is " . date("h"). "<br>";
echo "Hour is " . date("H"). "<br>";
echo "Hour is " . date("g"). "<br>";
echo "Hour is " . date("G"). "<br>";
echo "Minutes is " . date("i"). "<br>";
echo "Seconds is " . date("s"). "<br>";
echo "Meridiem is " . date("a"). "<br>";
echo "Meridiem is " . date("A"). "<br>";
echo "Time is " . date("h:i:sa e"). "<br>";
echo "Time & Date is " . date("d-m-Y h:i:sa"). "<br>";
date_default_timezone_set("Asia/Karachi");
echo "Time is " . date("h:i:sa e"). "<br>";
?>
