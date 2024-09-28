<?php

/* The array_column() function returns the values from a single column in the input array.
Syntax:
array_column(array, column_key, index_key)*/

/* Array_Chunk()
The array_chunk() function splits an array into chunks of new arrays.
Syntax:
array_chunk(array, size, preserve_key)*/

//Array_Column
$array = array(
    array(
        'id' => 2201,
        'first_name' => 'Anil',
        'last_name' => 'Kapoor',
    ),
    array(
        'id' => 2202,
        'first_name' => 'Salman',
        'last_name' => 'Khan',
    ),
    array(
        'id' => 2203,
        'first_name' => 'John',
        'last_name' => 'Abraham',
    )
);

$newArray = array_column($array,'first_name');

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ------With 3rd Parameter as a key------ */

$newArray1 = array_column($array,'first_name','id');

echo "<pre>";
print_r($newArray1);
echo "</pre>";

// Array chunk
$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];

$newArray2 = array_chunk($cars,3);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

$age = array(
			"Mohan" => "35",
			"Aman" => "37",
			"Ram" => "43",
			"Salman" => "25" 
		);

$newArray3 = array_chunk($age,3,true);

echo "<pre>";
print_r($newArray3);
echo "</pre>";

?>