<?php

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);

mysqli_close($conn);
?>
