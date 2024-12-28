<?php

header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');

//$data = json_decode(file_get_contents("php://input"), true);

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "SELECT * FROM apitable";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");



if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output, JSON_PRETTY_PRINT);
} else {
    echo json_encode(array('message' => 'No Record Found.', 'status' => false));
}

mysqli_close($conn);
?>