<?php
/* Syntax
strtotime(time, now); 
The strftime() function formats a local time and/or date according to locale settings.
Syntax:strftime(format, timestamp)*/

//String To Time Function
echo strtotime("now")."<br>";// ya unreadable form ma ayiga isay dkhnay ka liya date function use hoga
echo date("d-m-Y",strtotime("now"))."<br>";
echo date("d-m-Y" ,strtotime("3 march 2010"))."<br>";
echo date("d-m-Y H:m" ,strtotime("+5 hours"))."<br>";
echo date("d-m-Y H:m" ,strtotime("+1 week"))."<br>";
echo date("d-m-Y H:m" ,strtotime("+1 week 3 days 7 hours 5 seconds"))."<br>";
echo date("d-m-Y H:m" ,strtotime("next Monday"))."<br>";
echo date("d-m-Y H:m" ,strtotime("last Sunday"))."<br>";
echo date("d-m-Y H:m" ,strtotime("First day of last month"))."<br><br>";
echo "Current Date: " . date("d-m-Y", strtotime("now")) . "<br>";
// String F Time Function
echo  strftime("%B %d %Y %X %Z")."<br>";
echo  strftime("%B %d %Y %X %Z", mktime(21,30,0,05,18,2021))."<br>";
echo  strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2021))."<br>";
echo  gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2021));
?>