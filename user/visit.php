<?php


session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../guest/index.php');
}

?>
<?php

include '../controller/connectDB.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
    } else {
        echo "<script>alert('Comment does not add.')</script>";
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
    <link rel="stylesheet" href="../css/comment.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">

    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/popup.css">

</head>

<body style="background-color: #1b1e21">
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">


    <ul class="navbar-nav mr-auto ml-5">
        <li class="nav-item">
            <a class="nav-link active" href="../index.php">Home</a>
        </li>
    </ul>

    <ul class="navbar-nav mr-5">
        <li class="nav-item  mr-5">
            <a class="nav-link" href="visit.php">Visit Us</a>
        </li>
        <li class="nav-item dropdown dropleft">
            <a class="nav-link" href="#" data-toggle="dropdown">
                <img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;"
                   href="#"><?php echo $_SESSION['email'] ?></a>
                <a class="dropdown-item" style="color:#fff;" href="../controller/logout.php">Log Out</a>
            </div>
        </li>
    </ul>
</nav>
<main>
    <section>
        <div class="comment-img">
            <img style="height: 450px; width: 100%"
                 src="https://i.pinimg.com/originals/6a/87/b0/6a87b06ee4f2c9ff739f1a4eaa901785.jpg" alt="">
        </div>
        <div>
            <h1 class="comment-title mt-4">More Information About Us</h1>
        </div>
    </section>
    <section class="d-flex p-5">
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
    <section class="d-flex justify-content-center comment-block">
        <div class="wrapper">
            <div class="d-flex justify-content-center">
                <div class="comment-title">Our Clients Are Most Important</div>
            </div>
            <p class="mt-3 text-center "><b>There is an opinions about us :)</b></p>
            <div class="prev-comments">
                <?php

                $sql = "SELECT * FROM comments";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <div class="single-item">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['comment']; ?></p>
                            <p><?php echo $row['created_at']; ?></p>
                        </div>
                        <?php

                    }
                }
                ?>
            </div>
            <form action="" method="POST" class="form">
                <div class="row">
                    <div class="input-group ml-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                    </div>
                </div>
                <div class="input-group textarea">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                </div>
                <div class="input-group justify-content-center">
                    <button name="submit" class="btn">Post Comment</button>
                </div>
            </form>
        </div>
    </section>
</main>
<footer>
    
</footer>

</body>

</html>