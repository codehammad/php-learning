<?php
include "config.php";

$post_id = $_GET['id'];
$cat_id = $_GET['catid'];

$del_img = "SELECT * FROM post WHERE post_id = {$post_id};";
$result = mysqli_query($conn, $del_img) or die("Query Failed");
$row = mysqli_fetch_assoc($result);

// to del img
unlink("upload/" . $row['post_img']);

$sql = "DELETE FROM post WHERE post_id = {$post_id};";
$sql_update = "UPDATE category SET post = post -1 WHERE category_id = {$cat_id}";

if (mysqli_query($conn, $sql)) {
    // If the INSERT is successful, then execute the UPDATE
    if (mysqli_query($conn, $sql_update)) {
        header('Location: ' . $hostname . 'admin/post.php');
    }
} else {
    echo '<div class="alert alert-danger">Query Failed</div>';
}

mysqli_close($conn);
