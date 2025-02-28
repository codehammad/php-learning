<?php
include 'config.php';
header('Content-Type: application/json');
$sql = "SELECT student.*, studentclass.cname 
        FROM student
        LEFT JOIN studentclass ON student.sclass = studentclass.cid";

$result = mysqli_query($conn, $sql);

if (!$result) {
    // If query fails, log the error
    error_log("SQL Error: " . mysqli_error($conn));
    die("SQL Error: " . mysqli_error($conn));
}

$output = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }
} else {
    $output['empty'] = ['empty'];
}

mysqli_close($conn);

echo json_encode($output);
?>
