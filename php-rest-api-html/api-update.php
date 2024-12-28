<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Methods,Access-Control-Allow-Headers,Content-Type,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "UPDATE apitable SET name = '{$name}', age = {$age}, city = '{$city}' WHERE id = {$id}";


if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Record Updated.', 'status' => true));
} else {
    echo json_encode(array('message' => 'No Record Updated.', 'status' => false));
}

mysqli_close($conn);
?>