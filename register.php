<?php
require_once('config.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "select * from login where username='$username'";
$res_login = mysqli_query($conn, $sql);
$sql_num = mysqli_num_rows($res_login);
if ($sql_num > 0) {
    echo "Username already exists! Please try with another username";
} else {

    if (isset($_POST['username']) && ($_POST['password'])) {
        $sql = "insert into login (login_id, username, password) values ('', '$username', '$password')";
    }
}
if ($conn->query($sql) === TRUE) {
    header("Location: home.php");
    exit;
} else {
    header("Location: registerpage.php?registersuccess=no");
}
