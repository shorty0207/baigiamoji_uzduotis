<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    } else {
        header('location: ../user/index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Dream Club</title>
    <link rel="stylesheet" href="../css/index1.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

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
        <li class="nav-item mr-3">
            <a class="nav-link" href="#popup2">Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#popup1">Log In</a>
        </li>
    </ul>
</nav>

<!-- Pop up boxes for login and registration -->
<div id="popup1" class="popup-overlay">
    <div class="log-popup">
        <h2>Log In</h2>
        <a class="close-window" href="#">&times;</a>
        <div class="log-content">
            <form action="../controller/login.php" method="post">
                <i class="fa fa-user icon"></i>
                <input type="email" placeholder="Your Email" name="email" class="log-input" required>
                <br>
                <i class="fa fa-lock icon"></i>
                <input type="password" placeholder="Password" name="password" class="log-input" required>
                <br>
                <input type="submit" value="Log In" name="signup-btn" class="btn-log">
            </form>
        </div>
    </div>
</div>

<div id="popup2" class="popup-overlay">
    <div class="log-popup">
        <h2>Sign Up</h2>
        <a class="close-window" href="#">&times;</a>
        <div class="log-content">
            <form action="../controller/register.php" method="post">
                <i class="fa fa-user icon"></i>
                <input type="text" placeholder="Enter your name" name="name" class="log-input" required>
                <br>
                <i class="fa fa-envelope icon"></i>
                <input type="text" placeholder="Enter your surname" name="surname" class="log-input" required>
                <br>
                <i class="fa fa-link icon"></i>
                <input type="email" placeholder="Enter your email" name="email" class="log-input" required>
                <br>
                <i class="fa fa-lock icon"></i>
                <input type="password" placeholder="Password" name="password" class="log-input" required>
                <br>
                <input type="submit" value="Sign Up" name="signup-btn" class="btn-log">
            </form>
        </div>
    </div>
</div>
<div id="success" class="popup-overlay">
    <div class="log-popup">
        <h2>Success</h2>
        <a class="close-window" href="#">&times;</a>
        <div class="log-content">
            <p>Acoount is created Successfully.Now you can login your account :)</p>
            <a href="#popup1" class="btn-main btn-main-primary">
                Log In
            </a>
        </div>
    </div>
</div>
<div id="error" class="popup-overlay">
    <div class="log-popup">
        <h2>Error</h2>
        <a class="close-window" href="#">&times;</a>
        <div class="log-content">
            <p>Username or Email already exist :( Try Again...</p>
        </div>
    </div>
</div>
<div id="error1" class="popup-overlay">
    <div class="log-popup">
        <h2>Error</h2>
        <a class="close-window" href="#">&times;</a>
        <div class="log-content">
            <p>No Account Found :( Try Again...</p>
        </div>
    </div>
</div>
<!-- End of Pop up boxes for login and registration -->


<header>
    <div class="container body ">
        <center>
            <div class="justify-content-between">
                <div class="inner-body">
                    <h1 class="title ">Welcome to
                        <span style="color: tomato ">Dream Team Sport Club</span>
                    </h1>
                    <div class="mb-0">
                        <img style="height: 300px; width: 100%" src="../image/gym-1.jpg" alt="">
                    </div>
                </div>
                <div class="justify-content-between">
                    <div class="d-flex mt-5 justify-content-between">
                        <div class="card1" style="width: 25%">
                            <div class="card" style="width: 18rem; height: 325px">
                                <img style="height: 120px" src="../image/image4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4><b>Premium</b></h4>
                                    <p class="card-text">
                                    <h6>7 professional workouts</h6>
                                    <h6>Just on evenings</h6>
                                    <h6>Trainer motivation and support on facebook group</h6>
                                    <h4><b>25 eur/mth</b></h4>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card2" style="width: 25%">
                            <div class="card" style="width: 18rem; height: 325px">
                                <img style="height: 120px" src="../image/image3.jpg" style="height: 40%"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4><b>Flex</b></h4>
                                    <p class="card-text">
                                        <h6>10 professional workouts</h6>
                                        <h6>Pool for free</h6>
                                        <h6>Trainer motivation and support on facebook group</h6>
                                        <h4><b>35 eur/mth</b></h4>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card3" style="width: 25%">
                            <div class="card" style="width: 18rem; height: 325px">
                                <img style="height: 120px" src="../image/image5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4><b>VIP</b></h4>
                                    <div class="card-text">
                                        <h6>12 professional workouts</h6>
                                        <h6>Pool, sauna always for free</h6>
                                        <h6>Trainer motivation and support on facebook group</h6>
                                        <h4><b>45 eur/mth</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

</header>

<div class="about-box ">
    <center>
        <div class="about ">
            <h1>About this site</h1>
            <p class="about-content ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nobis officiis,
                labore non molestias maxime,
                corporis saepe voluptatibus culpa sequi minus vitae qui eos expedita quos placeat consectetur voluptas
                ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quos, aut voluptatum
                a est distinctio cumque eveniet nisi. Soluta, aliquid tempora quae in reiciendis aut aliquam obcaecati
                atque dolor perspiciatis?</p>
        </div>
    </center>
</div>


<div class="footer">
    <p>&copy; Copyright Developed by Dream Team.</p>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="../js/main.js"></script>
<script>

</script>
</body>

</html>