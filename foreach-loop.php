<?php
$colors = ["red","green","yellow"];
foreach ($colors as $value) {
	echo $value . "<br>";
}

// foreach loop with Associative Array

$age = [
	"hammad" => "30",
	"fayyaz" => "10",
	"ali" => "5"
];
foreach ($age as $key => $value) {
	echo "$key = $value <br>";
}

// work with ul tag
echo "<ul>";
foreach($age as $key => $value){
  echo "<li>$key = $value </li>";
}
echo "</ul>";

?>