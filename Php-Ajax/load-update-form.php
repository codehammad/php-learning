<?php

$s_id = $_POST['id'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "SELECT * FROM student WHERE sid = {$s_id}";
$result = mysqli_query($conn, $sql) or die("Query Failed");

$output = "";
if (mysqli_num_rows($result)) {
    $output = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $output = '
        <form id="editForm">
                <label for="editName">Student Name:</label>
                <input type="text" id="editName" name="editName" required value="' . $row["sname"] . '">
                <input type="hidden" id="editId" name="editId" value="' . $row["sid"] . '">
                <button type="submit" id="updateButton">Update</button>
            </form>';
    }
    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No Record Found</h2>";
}



?>