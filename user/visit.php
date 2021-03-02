<?php


session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../guest/index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Dream Club</title>
    <link rel="stylesheet" href="../css/comment.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/popup.css">

</head>

<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
    <!-- Brand/logo -->


    <!-- Links -->
    <ul class="navbar-nav mr-auto ml-5">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item ml-3">
            <a class="nav-link" href="browse.php">About Us</a>
        </li>
    </ul>
    <!-- Links -->
    <ul class="navbar-nav mr-5">
        <li class="nav-item  mr-5">
            <a class="nav-link" href="visit.php">Visit Us</a>
        </li>
        <li class="nav-item dropdown dropleft">
            <a class="nav-link" href="#" data-toggle="dropdown">
                <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"><?php echo $_SESSION['email'] ?></a>
                <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
            </div>
        </li>
    </ul>
</nav>
<main>
   <section>
       <div class="comment-img">
           <img style="height: 450px; width: 100%" src="https://www.designevo.com/res/templates/thumb_small/black-hexagon-and-gymnasium-coach.png" alt="">
       </div>
   </section>
    <section>
        <div>
            <h1 class="comment-title mt-4">More Information About Us</h1>
        </div>
        <div>
            <div class="club-inside">
                <img src="../image/comment2.jpg" alt="">
            </div>
        </div>
        <div>
            <div class="club-inside">
                <img src="../image/comment3.jpg" alt="">
            </div>
        </div>
        <div>
            <div class="club-inside">
                <img src="../image/comment5.jpg" alt="">
            </div>
        </div>
    </section>
    <section>

    </section>
</main>



</body>

</html>