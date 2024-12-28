<?php
// Json_Decode convert back the json data into array
$json_file = "json/my.json";

$json_data = file_get_contents($json_file);

$arr = json_decode($json_data, true); // true for assoc array

echo '<table width="50%" border="1" cellspacing="0" cellpadding="10">';

foreach ($arr as $row) {
    echo '<tr>';
    // Instead of looping through all values, access them directly by key
    echo '<td>' . $row['sid'] . '</td>';
    echo '<td>' . $row['sname'] . '</td>';
    echo '<td>' . $row['saddress'] . '</td>';
    echo '</tr>';
}

echo "</table>";
?>