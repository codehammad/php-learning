<?php
include 'database.php';

$obj = new Database();
 
// Insert Data
// $obj->insert('student',['sname'=>'Kumar Sanu','saddress'=>'Multan']);
// echo "Insert result is : ";
// print_r($obj->getResult());

// Update Data
// $obj->update('student',['sname'=>'Losha','saddress'=>'Multan'],'sid = "16"');
// echo "Update result is : ";
// print_r($obj->getResult());

// Delete Data
// $obj->delete('student','sid = "15"');
//  echo "Delete result is : ";
//  print_r($obj->getResult());

// Send Whole Query
// $obj->sql('SELECT * FROM student WHERE sname = "Hammad Fayyaz"');
// 	echo "SQL result is : ";
// 	echo "<pre>";
	// print_r($obj->getResult());
    // echo "</pre>";

    $colName = "student.sid,student.sname,student.saddress,studentclass.cname";
	$join = "studentclass ON student.sclass = studentclass.cid";
	$limit = 3;
// Select Data
$obj->select('student',$colName,$join,null,null,$limit);
	echo "\n\nSelect result is : ";
    echo "<pre>";
	print_r($obj->getResult());
    echo "</pre>";

$obj->pagination('student',$join,null,$limit);
?>