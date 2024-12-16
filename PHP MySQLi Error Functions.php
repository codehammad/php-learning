<?php
// Connect Error Check
//$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
// Connect Error Number Check
$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_errno());
$sql = "SELECT * FROM student";
// query Error
//$result = mysqli_query($conn, $sql) or die("Query Failed :". mysqli_error($conn));

// Shows Error List
$result = mysqli_query($conn, $sql);
print_r(mysqli_error_list($conn));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['sid'] . ") " . $row['sname'] . "<br>";
    }
}

?>