<?php

session_start();

include('connectDB.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$email =$_POST['email'];
$password = $_POST['password'];

//Validation
$sql = "SELECT * FROM userdata WHERE name = '$name' OR email = '$email'";

$res = $conn->query($sql);
$num = mysqli_num_rows($res);

if ($num >= 1) {
    if ($_SESSION['name']=="admin") {
        header('location: ../users/index.php#error');
    } else {
        header('location: ../guest/index.php#error');
    }
} else {
    $sql = "INSERT INTO userdata (name, surname, email, password) values('$name','$surname','$email','$password')";

    $result = $conn -> query($sql);

    if ($_SESSION['username']=="admin") {
        header('location: ../admin/users.php#success');
    } else {
        header('location: ../guest/index.php#success');
    }
}
$conn->close();
?>