<?php
include 'config.php';

if (empty($_FILES['new-image']['name'])) {
    $file_name = $_POST['old_image'];
} else {
    $errors = array();

    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];
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


$title = mysqli_real_escape_string($conn, $_POST['post_title']);
$desc = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = $_POST['category'];
$post_id = $_POST['post_id']; 

$sql = "UPDATE post SET 
            title = '$title', 
            description = '$desc', 
            category = $category, 
            post_img = '$new_name' 
        WHERE post_id = $post_id";

if (mysqli_query($conn, $sql)) {
    // If category has changed, update the post counts
    if ($_POST['old_category'] != $_POST['category']) {
        // Decrease the post count for the old category
        $sql_update = "UPDATE category SET post = post - 1 WHERE category_id = {$_POST['old_category']}";
        mysqli_query($conn, $sql_update);

        // Increase the post count for the new category
        $sql_update1 = "UPDATE category SET post = post + 1 WHERE category_id = {$_POST['category']}";
        mysqli_query($conn, $sql_update1);
    }

    header('Location: ' . $hostname . 'admin/post.php');
    exit();
} else {
    echo 'Query Failed';
}
?>