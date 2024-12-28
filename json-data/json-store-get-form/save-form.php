<?php
if ($_POST['fullname'] != '' && $_POST['age'] != '' && $_POST['city'] != '') {
    if (file_exists('json/student_data.json')) {
        $current_data = file_get_contents('json/student_data.json');

        $array_data = json_decode($current_data, true);

        $new_data = array(
            'name' => $_POST['fullname'],
            'age' => $_POST['age'],
            'city' => $_POST['city']
        );

        $array_data[] = $new_data;
        $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

        if (file_put_contents('json/student_data.json', $json_data)) {
            echo "Successfully saved data in Json File";
        } else {
            echo "Unsccessfully saved data in Json File";
        }
    } else {
        echo "File Not Exist.";
    }
} else {
    echo "<h2>All Form Fields Must be filed</h2>";
}
?>