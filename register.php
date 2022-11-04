<?php
include('connection.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);


if (isset($_POST['username']) && ($_POST['password'])) {
    $sql = "insert into login (login_id, username, password) values ('', '$username', '$password')";
}

if ($con->query($sql) === TRUE) {
    header("Location: home.html");
    exit;
} else {
    echo "Error: Couldn't register" .mysqli_error($con);
}
