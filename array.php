<?php
$colors = array("red","green","black","pink");
echo $colors[1]."<br>";

// 2nd way
$colors = ['red', 20, 'blue', 33.33];

echo "<pre>";
print_r($colors);// this function use to read array easily
echo "</pre>";

// 3rd way
$colors[0] = "red";  
$colors[1] = "green";
$colors[2] = "yellow";
$colors[3] = "blue";

// Loop Method
echo "<ul>";
for($i = 0 ; $i < 4 ; $i++){
   echo "<li>$colors[$i]</li>";  // ya $colors[$i] line array ka index wala number loop ka i variable sa la laga
}
echo "</ul>"; 

?>