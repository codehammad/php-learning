<?php
// Recursive Function
function display($number) {
    if($number<=5){
     echo "$number <br/>";
     display(++$number);
    }
}
display(1);

// Factorial Number
function factorial($n)
{
  if ($n == 0){
    return 1;
  }else{
    return ($n * factorial ($n -1));
  }
}
echo "Fictorial is :" . factorial(5);

?>