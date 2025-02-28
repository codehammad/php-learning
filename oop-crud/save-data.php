<?php

	include "database.php";
	$obj = new Database();

	$sname = $_POST['sname'];
	$saddress = $_POST['saddress'];
	$scity = $_POST['scity'];

	$value = ["sname"=>$sname, "saddress"=>$saddress, "sclass"=>$scity];

	if($obj->insert("student",$value)){
		echo "<h2>Data Inserted Successfully.</h2>";
	}else{
		echo "<h2>Data is Not Inserted Successfully.</h2>";
	}

?>