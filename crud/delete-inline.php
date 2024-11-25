<?php

$std_id = $_GET['id'];

// Database
include 'config.php';

// SQL query
$sql = "DELETE FROM student WHERE sid = {$std_id}";
$result = mysqli_query($conn, $sql) or die("Query Failed");

header('Location: http://localhost/crud/index.php');

mysqli_close($conn);
?>