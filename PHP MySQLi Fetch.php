<?php
$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Query Failed");
// Fetch AS Associative Array
//$row = mysqli_fetch_assoc($result);

// echo "<pre>";
// print_r($row);
// echo "</pre>";
// ---Print only first entry
//echo $row['sid'] . ") " . $row['sname'];
// ---Print All Entries
// while($row = mysqli_fetch_assoc($result)){
//     echo $row['sid'] . ") " . $row['sname'] . "<br>";
// }

// Fetch As Index Array
$row = mysqli_fetch_row($result);

echo "<pre>";
print_r($row);
echo "</pre>";

// Fetch As Index Array and Assciative Array
$row = mysqli_fetch_array($result);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);// show only associative

echo "<pre>";
print_r($row);
echo "</pre>";

// Fetch As Multi Dimansional Array  its show all records without loop
//$row = mysqli_fetch_all($result);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);  // show multi-dem as associative
echo "<pre>";
print_r($row);
echo "</pre>";

foreach ($row as $data) {
    echo $data['sid'] . ") " . $data['sname'] . "<br>";
}

// Show Table Data Info
$row = mysqli_fetch_field($result);  // show multi-dem as associative
echo "<pre>";
print_r($row);
echo "</pre>";

while ($field = mysqli_fetch_field($result)) {
    echo $field->name . " " . $field->length . "<br>";// it use arrow operator to show index values  (OOP)
}
?>
