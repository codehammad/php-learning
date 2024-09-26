<?php
$emp = [
  [1,"Hammad","Manager",50000],
  [2,"Salman","Salesman",20000],
  [3,"Ali","Computer Operator",12000],
  [4,"Amir","Driver",5000]
];

echo "<pre>";
print_r($emp);
echo "</pre>";

/* TWO dimensional Array row / column one way*/
echo $emp[0][0] . " ";
echo $emp[0][1] . " ";
echo $emp[0][2] . " ";
echo $emp[0][3] . " ";

echo "<br>";
echo "<br>";

// TWO dimensional Array with loop
for($row=0;$row<4;$row++){
  for($col=0;$col<4;$col++){
    echo $emp[$row][$col] . " ";
  }
  echo "<br>";
}

echo "<br>";
echo "<br>";

/* Multidimensional Array Foreach Loop */
foreach ($emp as $v1) {
    foreach ($v1 as $v2){
        echo $v2 . " ";
    }
    echo "<br>";
}

// Print with Table tag
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
        <th>Emp Id</th>
        <th>Emp Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>";
    foreach ($emp as $v1){
        echo "<tr>";
    foreach ($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";


?>