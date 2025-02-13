<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
// Check if the query was successful
if (!$result) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Id : {$row["sid"]} - Name : {$row["sname"]} - Address : {$row["saddress"]} <br>";
    }
} else {
    echo "No Result Found";
}

$conn->close();

?>