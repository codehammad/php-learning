<?php

include 'config.php';

$sid = $_GET['delId'];

$sql = "DELETE FROM student WHERE sid={$sid}";

if(mysqli_query($conn,$sql)){
	echo json_encode(array('delete' => 'success'));
}else{
	echo json_encode(array('delete' => 'failed'));
}

?>