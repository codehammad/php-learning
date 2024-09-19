<?php
$age = 18;
// Logical AND Operator
if($age >= 15 && $age <= 20){
	echo "You are Eligible.<br>";
}
// Logical OR Operator
if($age >= 15 || $age <= 10){
	echo "You are Eligible.<br>";
}
// Logical NOT Operator
if(!($age >= 15)){
	echo "You are Eligible.<br>";
}
// Logical xor Operator  ya dono ma sa koi ak false ho gi to true hoga bass.
if($age >= 18 xor $age <= 20){
    echo "You are Eligible.<br>";
}
?>