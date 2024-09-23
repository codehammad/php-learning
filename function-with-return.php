<?php

//1)
function hello($fname="First",$lname="Last"){
  $v = "$fname $lname";

  return $v;
}

echo hello("Hammad","Fayyaz");

echo "<br>";
//2)
$name = hello("John","Wick");

echo "Hello $name"; 

echo "<br>";
//3)
function sum($math,$comp,$eng){
	$s = $math+$comp+$eng;
	return $s;
}

function percentage($t){
	$per = $t/3;
	echo "Total Subject Percentage : " . $per . "%";
}

$total = sum(22,30,40);
percentage($total);
?>