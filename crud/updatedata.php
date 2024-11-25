<?php
$std_id = $_POST['sid'];
$std_name = $_POST['sname'];
$std_address = $_POST['saddress'];
$std_class = $_POST['sclass'];
$std_phone = $_POST['sphone'];

// Database
$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed");

// SQL query
$sql = "UPDATE student SET sname = '{$std_name}', saddress  = '{$std_address}' , sclass = '{$std_class}' , sphone = '{$std_phone}' WHERE sid = '{$std_id}'";

$result = mysqli_query($conn, $sql) or die("Query Failed");

header('Location: http://localhost/crud/index.php');

mysqli_close($conn);
?>