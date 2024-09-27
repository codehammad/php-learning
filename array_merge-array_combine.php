<?php
/* Multiple Array Merge */
$fruit = ["orange", "banana", "grapes"];
$veggie = ['carrot', 'pea'];

$newArray = array_merge($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// ASSOCIATIVE Index Array
$fruit = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];

$veggie = ['b' => 'carrot','e' => 'pea']; /* ---- Also with SAME KEY */
$newArray1 = array_merge($fruit,$veggie);

// $newArray = $fruit + $veggie; // ya dublicate key ko replace nahi karayga lakin us sa agli value agay array ma add karda ga

echo "<pre>";
print_r($newArray1);
echo "</pre>";

//array_merge_recursive
$newArray2 = array_merge_recursive($fruit,$veggie); /* --- for common key built new array --- */
echo "<pre>";
print_r($newArray2);
echo "</pre>";

$veggie = ['b' => ['color' => ['red','blue','green']],  /* ---- more complex multidimensional array ----*/
            'e' => 'pea',
            55,
            68
          ];

$newArray3 = array_merge_recursive($fruit,$veggie);
echo "<pre>";
print_r($newArray3);
echo "</pre>";

//array_combine  ya pahli array ko as a key or duri ko value use kar gi
$name = array("Hammad","Ali","Salman");
$age = array("35","55","43");

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>