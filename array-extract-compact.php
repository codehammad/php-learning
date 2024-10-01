<?php
/* The extract() function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.
Syntax: extract(array, extract_rules, prefix) */

/* The compact() function creates an array from variables and their values.
Syntax: compact(var1, var2...)*/

// Array Extract Function

$a = "orange";

$color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

extract($color);

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo '<br>';

/*-------Extract_rules------- */


//EXTR_OVERWRITE by default

extract($color,EXTR_OVERWRITE);

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";
echo '<br>';

//EXTR_SKIP  ya array ma ssa jo variable bnay ga usay skip karda ga

$a1 = "orange";
$color = array('a1' => 'red', 'b1' => 'green', 'c1' => 'blue');

extract($color,EXTR_SKIP);

echo "Value of a1 : $a1 <br>";
echo "Value of b1 : $b1 <br>";
echo "Value of c1 : $c1 <br>";
echo '<br>';

//EXTR_PREFIX_SAME

extract($color,EXTR_PREFIX_SAME,"test");

echo "Value of a1 : $a1 <br>";
echo "Value of a1 : $test_a1 <br>";
echo "Value of b1 : $b1 <br>";
echo "Value of c1 : $c1 <br>";
echo '<br>';

//EXTR_PREFIX_ALL

extract($color,EXTR_PREFIX_ALL,"test");

echo "Value of a1 : $a1 <br>";
echo "Value of a1 : $test_a1 <br>";
echo "Value of b1 : $test_b1 <br>";
echo "Value of c1 : $test_c1 <br>";
echo '<br>';

// Compact Function  ya variables ko asscoiative array bna da ga

$firstname = "Hammad";
$lastname = "Fayyaz";
$age = "21";
$gender = "Male";
$country = "Pakistan";

$newArray = compact("firstname", "lastname", "age");

echo '<pre>';
print_r($newArray);
echo '</pre>';

// Use extra array in compact function

$extra = ["gender" , "country"];

$newArray1 = compact("firstname", "lastname", "age",$extra );

echo '<pre>';
print_r($newArray1);
echo '</pre>';

?>