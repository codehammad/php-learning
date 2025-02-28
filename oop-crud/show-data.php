<?php
	include 'database.php';

	$obj = new Database();

	$colName = "student.sid,student.sname,student.saddress,studentclass.cname";
	$join = "studentclass ON student.sclass = studentclass.cid";
	$limit = 3;

	$obj->select('student','*',$join,null,null,$limit);
	$result = $obj->getResult();

	echo "<table border='1' width='500px'>
					<tr>
						<th>Id</th>
						<th>Student Name</th>
						<th>Address</th>
						<th>City</th>
					</tr>
				";
	foreach ($result as list("sid"=>$id,"sname"=>$name,"saddress"=>$address,"cname"=>$city)) {
		echo "<tr><td>$id </td><td> $name </td><td> $address </td><td> $city</td></tr>";
	}

	echo "</table>";

	$obj->pagination('student',$join,null,$limit);

	?>