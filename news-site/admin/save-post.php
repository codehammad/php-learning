<?php
include "config.php";

session_start();

$post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
$postdesc = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = $_POST['category'];
$date = date("d M, Y");
$author = $_SESSION['user_id'];

if (isset($_FILES['fileToUpload'])) {

    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_parts = explode('.', $file_name);
    $file_ext = strtolower(end($file_parts));
    $extension = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extension) === false) {
        $errors[] = "This File type Not Allowed";
    }

    if ($file_size > 2097152) {
        $errors[] = "File size must be smaller than 2mb";
    }

    $new_name= time(). '-'.basename($file_name); 
    $target = "upload/" . $new_name;
    // save image name in seprate variable must 
    $image_name= $new_name;

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $target);
    } else {
        echo "Sorry, there was an error uploading your file.";
        die();
    }
}

$sql = "INSERT INTO post (title, description, category, post_date,author,post_img)
VALUES('{$post_title}','{$postdesc}',{$category},'{$date}',{$author},'{$new_name}');";

$sql_update = "UPDATE category SET post = post +1 WHERE category_id = {$category}";

if (mysqli_query($conn, $sql)) {
    // If the INSERT is successful, then execute the UPDATE
    if (mysqli_query($conn, $sql_update)) {
        header('Location: ' . $hostname . 'admin/post.php');
    } else {
        echo '<div class="alert alert-danger">Failed to update category count</div>';
    }
} else {
    echo '<div class="alert alert-danger">Query Failed</div>';
}
?>