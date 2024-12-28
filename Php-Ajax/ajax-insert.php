<?php

$s_name = $_POST['s_name'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "INSERT INTO student(sname) VALUES ('{$s_name}')";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

mysqli_close($conn);
?>