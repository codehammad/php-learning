<?php
include "config.php";

session_start();
// restriction for normal people
if ($_SESSION['user_role'] == 0) {
    header('Location: ' . $hostname . 'admin/post.php');
}

$user_id = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$user_id}";
$result = mysqli_query($conn, $sql) or die("Query Failed");

header('Location: ' . $hostname . 'admin/users.php');

mysqli_close($conn);
?>