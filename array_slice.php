<?php
/* syntax:
    array_slice(array, start, length, preserve)*/

/*------ Array Slice ------*/
$color=array("red","green","blue","yellow","brown");

$newArray = array_slice($color, 1, 2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* -------------with Negative Index---------- */
echo "<pre>";
print_r(array_slice($color,-2,1));
echo "</pre>";
echo '<br>';

/* ---------Preserve Parameter----------- */
echo "<pre>";
print_r(array_slice($color,1,2,true)); 
echo "</pre>";
echo '<br>';

/* -----Preserve Parameter With Associative Array ----------*/
$color = array('a'=>'red', 'b'=>'green', '42'=>'blue', 'd'=>'yellow');

echo "<pre>";
print_r(array_slice($color, 0, 3));
echo "</pre>";
echo '<br>';
echo "<pre>";
print_r(array_slice($color, 0, 3, true));
echo "</pre>";
echo '<br>';

/* -------------Preserve Parameter - III-------------- */
$a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
echo "<pre>";
print_r(array_slice($a,1,2));
echo "</pre>";


?>