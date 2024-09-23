<?php
/* function argument By Reference( ya us variable ka address la ka us ma new add kar da ga) */
function testing(&$string)
{
    $string .= 'something extra.';
}
$str = 'This is text, ';
testing($str);
echo $str;
echo "<br>";

/* function argument By Reference*/
function first($num) {
  $num += 5;
}

function second(&$num) {
  $num += 6;
}

$number = 10;
first( $number );
echo "Value is $number<br />";

second( $number );
echo "Value is $number<br />";

?>