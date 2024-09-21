<?php
// goto define ki howi label par jump karta ha
for($a = 1; $a <= 10; $a++){
  if($a == 3){    
    goto a;
  }
  echo "Number : " . $a . "<br>";
}

echo "Hello";
a:
echo "Here is label A.";
?>