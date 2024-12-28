<?php

$search_term = $_POST['search'];

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection Failed :" . mysqli_connect_error());
$sql = "SELECT * FROM student WHERE sname LIKE '%{$search_term}%'";
$result = mysqli_query($conn, $sql) or die("Query Failed");

$output = "";
if (mysqli_num_rows($result)) {
    $output = '<table width="50%" border="1" cellspacing="0" cellpadding="10">
    <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<tbody>
                <td width="12%">' . $row["sid"] . '</td>
                <td>' . $row["sname"] . '</td>
                <td width="100" style="text-align:center;"><button id="editButton" data-eid="' . $row["sid"] . '">Edit</button></td>
                <td width="100" style="text-align:center;"><button id="deleteButton" data-id="' . $row["sid"] . '">Delete</button></td>
            </tbody>';
    }
    $output .= '</table>';
    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No Record Found</h2>";
}

?>