<?php
$food = array('orange', 'banana', 'apple');

echo count($food).'<br>';

$food1 = array(
      'fruits' => array('orange', 'banana', 'apple'),
      'veggie' => array('carrot', 'collard', 'pea')
    );

echo sizeof($food1,1).'<br>'; // IInd parameter is MODE (0 or 1)
echo sizeof($food1['fruits'],1).'<br>';// check specific array in array

$len = count($food);
for($i = 0; $i < $len; $i++){
    echo $food[$i] . "<br>";
}

// count array values  array_count_values  ya bhi check karta ha ka values dublicate han
$food2 = array('orange', 'banana', 'orange' , 'apple');

echo "<pre>";
print_r(array_count_values($food2));
echo "</pre>";

?>