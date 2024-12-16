<?php
$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed");

$sql = "UPDATE student SET sname = 'Malik Usman' WHERE sname = 'Usman Iqbal'";
$result = mysqli_query($conn, $sql) or die("Query Failed");

// Shows Affected Rows
echo "Total Rows :" . mysqli_affected_rows($conn);
?>