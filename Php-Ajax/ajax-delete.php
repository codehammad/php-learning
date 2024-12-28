<?php
$s_id = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "DELETE FROM student WHERE sid = {$s_id}";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

mysqli_close($conn);

?>