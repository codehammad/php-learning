<?php
function myfun($name){
	echo "Hello $name";
}
myfun("Hammad");
echo "<br>";

// TWO Argument
function hello($fname,$lname){
  echo "Hello $fname $lname<br>";
}
hello("Hammad","Fayyaz");
hello("John","Wick");
echo "<br>";

/* Default Value */
// function hello($fname="First",$lname="Name"){
//   echo "Hello $fname $lname.<br>";
// }

/*  SUM function */
function sum($a,$b){
  echo $a + $b;
}

sum(10,20.50);
echo "<br>";
/* Passing with Variables */
$one = 10;
$two = 20.50;
sum($one,$two);

?>