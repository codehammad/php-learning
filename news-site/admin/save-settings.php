<?php
include 'config.php';

if (empty($_FILES['logo']['name'])) {
    $file_name = $_POST['old_logo'];
} else {
    $errors = array();

    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_tmp = $_FILES['logo']['tmp_name'];
    $file_type = $_FILES['logo']['type'];
    $file_parts = explode('.', $file_name);
    $file_ext = strtolower(end($file_parts));
    $extension = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extension) === false) {
        $errors[] = "This File type Not Allowed";
    }

    if ($file_size > 2097152) {
        $errors[] = "File size must be smaller than 2mb";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/" . $file_name);
    } else {
        echo "Sorry, there was an error uploading your file.";
        die();
    }
}


$sql = "UPDATE settings SET webname = '{$_POST['website_name']}' , logo = '{$file_name}', footerdesc = '{$_POST['footer_desc']}'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: ' . $hostname . 'admin/settings.php');
} else {
    echo 'Query Failed';
}
