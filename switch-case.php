<?php
// Example One
$weekday = 2;
switch ($weekday){
	case 1:
	echo "Today is Monday";
	break;
	case 2:
	echo "Today is Tuesday";
	break;
	case 3:
	echo "Today is Wednesday";
	break;
	case 4:
	echo "Today is Thursday";
	break;
	case 5:
	echo "Today is Friday";
	break;
	case 6:
	echo "Today is Saturday";
	break;
	case 7:
	echo "Today is Sunday";
	break;
	default:
	echo "Enter Valid Day Number";
	break;
}

echo "<br>";

// Example Two
$age = 18;
switch (true){
	case ($age >= 15 && $age <= 20):
	echo "You are Eligible";
	break;
	case ($age >= 21 && $age <= 30):
	echo "You are not Eligible";
	break;
	default:
	echo "Invalid Age";
	break;
}
?>