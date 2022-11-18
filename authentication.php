<?php
require_once('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select *from login where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header("Location: home.php");
    exit;
} else {
    header("Location: index.php?validationsuccess=no");
    // echo "<script type='text/javascript'></script>";
}
?>
