<?php

$conn = mysqli_connect("localhost", "root", "", "mydb") or die("Connection failed");

$limit_per_page = 5;

$page = "";
if (isset($_POST["page_no"])) {
  $page = $_POST["page_no"];
} else {
  $page = 0;
}


$sql = "SELECT * FROM ajax LIMIT {$page},$limit_per_page";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
$output = "";
if (mysqli_num_rows($result) > 0) {
  $output .= "<tbody>";
  while ($row = mysqli_fetch_assoc($result)) {
    $last_id = $row["id"];
    $output .= "<tr>
    <td align='center'>{$row["id"]}</td>
    <td>{$row["first_name"]} {$row["last_name"]}</td>
    </tr>";
  }

  $output .= "</tbody>
              <tbody id='pagination'>
                <tr>
                  <td colspan='2'>
                    <button id='loadmoreBtn' data-id='{$last_id}'>Load More</button>
                  </td>
                </tr>
              </tbody>";

  echo $output;
} else {
  echo "";
}
?>