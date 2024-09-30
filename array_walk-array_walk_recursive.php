<?php
/* The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.

Syntax
array_walk(array, myfunction, parameter...) */

/* The array_walk_recursive() The difference between this function and the array_walk() function is that with this function you can work with deeper arrays (an array inside an array).

Syntax
array_walk_recursive(array, myfunction, parameter...) */

/* -------Array Walk-------*/
$fruits = array(
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
          );

array_walk($fruits, "myFunction");

function myFunction($value, $key){
  echo "$key : $value <br>";
}

// Third parameter as a value

array_walk($fruits, "myFunction1", "is a key of");

function myFunction1($value, $key , $param){
  echo "$key $param $value. <br>";
}
echo "<br>";
// array_walk_recursive

$veggie = array( "1" => "Carrot", "2" => "Tomatoes");

$fruits1 = array(
            $veggie, // array uper wali yahan aya jygi
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
);

array_walk_recursive($fruits1, "myFunction1", "is a key of");

?>