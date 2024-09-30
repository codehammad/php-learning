<?php
// Array Traversing Function  ya current array ka pointer yani selected value ko access or next prev wagar karta ha
$food = array('orange', 'banana', 'apple', 'grapes');

echo "<b>Current : </b>" . current($food) ."<br>";

echo "<b>Key : </b>" . key($food) ."<br>";

echo "<b>Pos : </b>" . pos($food) ."<br>";

// Array Traversing Next Function

next($food);
echo "<b>Current : </b>" . current($food) ."<br>";

next($food);
echo "<b>Current : </b>" . current($food) ."<br>";

// Array Traversing Prev Function

prev($food);
echo "<b>Current : </b>" . current($food) ."<br>";

// Array Traversing End Function

end($food);
echo "<b>Current : </b>" . current($food) ."<br>";
echo "<b>Key : </b>" . key($food) ."<br>";

// Array Traversing Each Function (using foreach instead)

foreach($food as $key => $value){
	echo "Key: $key, Value: $value<br>";
}


// Array Traversing Reset Function
reset($food);
echo "<b>Current : </b>" . current($food) ."<br>";

?>