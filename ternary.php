<?php
$x = 10;
// method one
($x > 20) ? $z = "Greater" : $z = "Smaller";
// method two
$z = ($x > 20) ?  "Greater" : "Smaller";
// method three
$z = "Value is " . ($x > 20 ?  "Greater" : "Smaller");
echo $z;
?>