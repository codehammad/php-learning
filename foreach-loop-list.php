<?php
// Index Array
    $emp = [
      [1,"Hammad","Manager",80000],
      [2,"Salman","Salesman",20000],
      [3,"Ali","Computer Operator",12000],
      [4,"Amir","Driver",5000]
];

foreach($emp as list($id,$name,$des,$salary)){
  echo "$id $name $des $salary </br>";
}

// In Table
echo "<table border='1px' cellpadding='5px' cellspacing='0'>
    <tr>
        <th>Emp Id</th>
        <th>Emp Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>";
foreach ($emp as list($id, $name,$des,$salary)) {
  echo "<tr><td>$id</td><td>$name</td><td>$des</td><td>$salary</td></tr>";
}
echo "</table>";

// Multidimensional Associative Array with list function
$emp = [
      ["id" => 1,"name" => "Hammad","designation" => "Manager","salary" => 80000],
      ["id" => 2,"name" => "Salman","designation" => "Salesman","salary" => 20000],
      ["id" => 3,"name" => "Ali","designation" => "Computer Operator","salary" => 12000],
      ["id" => 4,"name" => "Amir","designation" => "Driver","salary" => 5000]
];

foreach ($emp as list("id" => $id, "name" => $name,"designation" => $desg,"salary" => $salary)) {
    echo "Id: $id; Name: $name; Designation: $desg; Salary: $salary</br>";
}

?>