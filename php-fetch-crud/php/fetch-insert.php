<?php

include 'config.php';

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$name = $decode["name"];
$class = $decode["class"];

$sql = "INSERT INTO student(sname,sclass) VALUES ('{$name}',
'{$class}')";

if(mysqli_query($conn,$sql)){
	echo json_encode(array('insert' => 'success'));
}else{
	echo json_encode(array('insert' => 'failed'));
}

?>