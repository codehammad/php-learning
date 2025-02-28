<?php
$db_name = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

$conn = new PDO($db_name,$username,$password);

$sql = $conn->query("SELECT * FROM student");

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result)){
    foreach($result as $row){
        echo "{$row['sid']} - {$row['sname']} - {$row['saddress']} <br>";
    }
}else{
    echo "No Record Found.";
}

?>