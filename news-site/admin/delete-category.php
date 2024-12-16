<?php
include "config.php";

session_start();
// restriction for normal people
if ($_SESSION['user_role'] == 0) {
    header('Location: ' . $hostname . 'admin/post.php');
}

$cat_id = $_GET['id'];

$sql = "DELETE FROM category WHERE category_id = {$cat_id}";
$result = mysqli_query($conn, $sql) or die("Query Failed");

header('Location: ' . $hostname . 'admin/category.php');

mysqli_close($conn);
?>
