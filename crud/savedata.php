<?php
$std_name = $_POST['sname'];
$std_address = $_POST['saddress'];
$std_class = $_POST['class'];
$std_phone = $_POST['sphone'];

// Database
$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed");

// SQL query
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) 
VALUES ('{$std_name}','{$std_address}','{$std_class}','{$std_phone}')";

$result = mysqli_query($conn, $sql) or die("Query Failed");

header('Location: http://localhost/crud/index.php');

mysqli_close($conn);
?>