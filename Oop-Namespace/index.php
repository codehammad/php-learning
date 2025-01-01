<?php
// OOP Namespace in PHP allows us to group related classes, functions, or constants together. 
// This helps avoid name conflicts and organize code efficiently.

require "product.php";
require "test.php";

function wow(){
    echo "Wow From Index.";
}
// ya new name assign karga
use pro\v1 as version; 

$obj1= new version\product();
echo "<br>";
$obj2= new tst\product();

//pro\wow();// ya apni file ka wow nahi dikhay ga pro namespace ka dikhayga
?>