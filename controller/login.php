<?php
session_start();
include('connectDB.php');

$email = $_POST['email'];
$password = $_POST['password'];
//Validation
$sql = "SELECT * FROM userdata WHERE email= '$email' && password = '$password'";

$res = $conn->query($sql);
$num = mysqli_num_rows($res);

if ($num == 1) {

    $_SESSION['email'] = strtolower($email);

    if ($_SESSION['email']=="admin") {
        header('location: ../admin/index.php');
        $_SESSION['status'] = 'admin';
    } else {
        header('location: ../user/index.php');
        $_SESSION['status'] = 'user';
    }
} else {
    header('location: ../index.php#error1');
}
$conn->close();
?>