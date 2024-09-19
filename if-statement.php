<?php
$a = 10;
$b = 5;

if($a > $b){
	echo "A is Greater";
}
echo "<br>";
if($a == $b){
        echo "A and B is Equal" ; 
    }
echo "<br>";
if($a !== $b){
        echo "A is not Equal" ; 
    }
echo "<br>";
// Second Method to write if statement
if($a == $b):
	echo "A and B is Equal<br>" ; 
endif;
?>