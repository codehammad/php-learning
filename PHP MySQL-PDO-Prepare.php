<?php
$db_name = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$city = "Lahore";
$id = 1;

$sql = $conn->prepare("SELECT * FROM student WHERE saddress = :city AND sid > :id");
// $sql->bindValue(':city', $city, PDO::PARAM_STR);
// $sql->bindValue(':id', $id, PDO::PARAM_INT);

$sql->execute(array(':city' => $city, ':id' => $id));

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result)){
    foreach($result as $row){
        echo "{$row['sid']} - {$row['sname']} - {$row['saddress']}<br>";
    }
}else{
    echo "No Record Found";
}


?>