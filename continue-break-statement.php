<?php
// Continue (use to Skip)
echo "Continue: <br>";

for($a = 1;$a<=10;$a++){
	if($a == 3){
		continue;
	}
	echo "Number " . $a . "<br>";
}
echo "<br>";
// Break
echo "Break: <br>";

for($a = 1;$a<=10;$a++){
	if($a == 3){
		break;
	}
	echo "Number " . $a . "<br>";
}
?>