<?php
/* Syntax : array_diff(array1, array2, array3, ...) */

//array_diff - compare only values and return differences only form $a1
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("a"=>"red","f"=>"green","d"=>"purple");

$newArray = array_diff($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/*--------- Compare only Key ---------*/
$newArray2 = array_diff_key($a1,$a2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

// Compare Key and Value both
$newArray3 = array_diff_assoc($a1,$a2);// only for associative array

echo "<pre>";
print_r($newArray3);
echo "</pre>";

/* -------Match Key and Value both with callback function------- */
function compare($a,$b)
{
  if ($a===$b){
    return 0;
  }
  return ($a > $b)?1:-1;
}

function compareValue($a,$b)
{
  if ($a===$b){
    return 0;
  }
  return ($a > $b)?1:-1;
}

$newArray4 = array_diff_uassoc($a1,$a2, "compare"); //can also use string fun - "strcasecmp"

echo "<pre>";
print_r($newArray4);
echo "</pre>";

// Compare only key with function
$newArray5 = array_diff_ukey($a1,$a2, "compare");

echo "<pre>";
print_r($newArray5);
echo "</pre>";


// Compare only value with function
$newArray6 = array_udiff($a1,$a2, "compare");

echo "<pre>";
print_r($newArray6);
echo "</pre>";


//Compare both value and key with two different functions

$newArray7 = array_udiff_uassoc($a1,$a2,"compare","compareValue");

echo "<pre>";
print_r($newArray7);
echo "</pre>";


?>