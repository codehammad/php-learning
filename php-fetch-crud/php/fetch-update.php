<?php

include 'config.php';

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$student_id = $decode["s_id"];
$name = $decode["name"];
$class = $decode["class"];

$sql = "UPDATE student SET sname = '{$name}', sclass = '{$class}' WHERE sid = {$student_id}";

if(mysqli_query($conn,$sql)){
	echo json_encode(array('update' => 'success'));
}else{
	echo json_encode(array('update' => 'failed'));
}

?>