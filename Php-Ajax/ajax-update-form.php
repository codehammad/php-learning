<?php
$s_id = $_POST['id'];
$s_name = $_POST['name'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "UPDATE student SET sname = '{$s_name}' WHERE sid = {$s_id}";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

mysqli_close($conn);
?>