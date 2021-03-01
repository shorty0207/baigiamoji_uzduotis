<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
    <!-- Brand/logo -->
    <a class="navbar-brand " href="#">
        <img src="../image/icon.png " alt="logo "> MoviesInfo
    </a>

    <!-- Links -->
    <ul class="navbar-nav mr-auto ">
    </ul>
    <!-- Links -->
    <ul class="navbar-nav ">
        <li class="nav-item ">
            <a class="nav-link active " href="# ">Home</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="browse.php">Browse Movies</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="request.php">Request</a>
        </li>
        <li class="nav-item dropdown dropleft">
            <a class="nav-link" href="#" data-toggle="dropdown">
                <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"><?php echo $_SESSION['username'] ?></a>
                <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
            </div>
        </li>
    </ul>
</nav>


</body>
</html>