<?php

include 'config.php';


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass' ") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exists';
    } else {
        mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name','$email','$pass')") or die('query failed');
        $message[] = 'registered successfully';
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css-->
    <link rel="stylesheet" href="style.css">
</head>

<body class="login">

    <!-- header section starts -->

    <section class="header">

        <a href="home.php" class="logo">Unravel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">archive</a>
            <a href="book.php">products</a>
            <a href="login.php">Log in</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>

    <!-- header section ends -->


    <!-- login section starts -->

    <section class="login-box">

        <h1 class="heading-title">Registration</h1>
        <a href="login.php">
            <h3>Already have an account? Log in</h3>
        </a>
        <div class="form-container">
            <form action="" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" required placeholder="Enter your name" name="name" class="box">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" required placeholder="Enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>password :</span>
                        <input type="password" required placeholder="Set password" name="password" class="box">
                    </div>
                    <div class="inputBox">
                        <span>Confirm password :</span>
                        <input type="password" required placeholder="Re-enter password" name="cpassword" class="box">
                    </div>
                </div>
                <input type="submit" value="Register now" class="btn" name="submit">
            </form>
        </div>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
            }
        }
        ?>
    </section>


    <!-- login section ends -->


    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-rig"></i>home</a>
                <a href="about.php"> <i class="fas fa-angle-rig"></i>about</a>
                <a href="package.php"> <i class="fas fa-angle-rig"></i>archive</a>
                <a href="book.php"> <i class="fas fa-angle-rig"></i>products</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="contact.php"> <i class="fas fa-angle-right"></i>Contact us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> contact@unravel.com</a>
                <a href="#"> <i class="fas fa-map"></i> Medellín, Colombia - 050020 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fab fa-youtube"></i>youtube</a>
            </div>

        </div>

        <div class="credit">
            <p>© 2021 Unravel. All rights reserved | Created by <span>Myself</span> Web Design</p>
        </div>
    </section>

    <!-- footer section ends -->




    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>