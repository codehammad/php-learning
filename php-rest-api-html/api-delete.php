<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Methods,Access-Control-Allow-Headers,Content-Type,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "DELETE FROM apitable WHERE id = {$id}";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Record Deleted.', 'status' => true));
} else {
    echo json_encode(array('message' => 'No Record Deleted.', 'status' => false));
}

mysqli_close($conn);
?>