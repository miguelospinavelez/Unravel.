<?php

include '../config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header('location:package.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | Archive</title>

    <!-- favicon link -->
    <link rel="icon" type="image/x-icon" href="../imgs/icons/fav/7.ico">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css-->
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- header -->

    <section class="header">

        <a href="../home/home.php" class="logo">Unravel.</a>
        <nav class="navbar">
            <a href="../home/home.php">home</a>
            <a href="../about/about.php">about</a>
            <a style="color:blueviolet; pointer-events: none;">archive</a>
            <a href="../products/book.php">products</a>
            <a id="loginButton" style="cursor: pointer;">Log in</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>




    <!-- archive -->

    <div class="heading" style="background: url(../imgs/bg/<?php echo (rand(1, 16));?>.png) no-repeat;)">
        <h1>Archive</h1>
    </div>

    <section class="archive">

        <h1 class="heading-title"> articles & studies </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../imgs/micr.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Introduction to Microdosing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/labs.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Studies on Psilocibin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/meditation.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Meditation Vault</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/mushrms.jpg" alt="">
                </div>
                <div class="content">
                    <h3>mushrooms & fungi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/growing-mushrooms-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mushroom cultivation guide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/doses.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Microdosing guide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>
        </div>

        <div class="load-more"><span class="btn">load more</span></div>

    </section>






    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="../home/home.php"> <i class="fas fa-angle-rig"></i>home</a>
                <a href="../about/about.php"> <i class="fas fa-angle-rig"></i>about</a>
                <a href="./archive/package.php"> <i class="fas fa-angle-rig"></i>archive</a>
                <a href="../products/book.php"> <i class="fas fa-angle-rig"></i>products</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>contact us</a>
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

     <!-- register modal -->

     <div id="myModal2" class="modal">

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Add validation here
    $errors = array();

    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        $errors[] = 'All fields are required';
    }

    if ($password !== $cpassword) {
        $errors[] = 'Passwords do not match';
    }

    // If there are no errors, proceed with registration
    if (empty($errors)) {
        // Use prepared statements
        $stmt = $conn->prepare("SELECT * FROM user_form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $errors[] = 'User already exists';
        } else {
            // Use password_hash to securely hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert user into the database
            $stmt = $conn->prepare("INSERT INTO user_form (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashedPassword);
            $stmt->execute();

            $success = 'Registered successfully';
        }
    }
}
?>

<div class="modal-content">

    <h1>Register</h1>

    <a id="backButton" style="cursor: pointer;">
        Already have an account? Log in
    </a>

    <?php
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<div class="message" onclick="this.remove();">' . $error . '</div>';
        }
    } elseif (isset($success)) {
        echo '<div class="message" onclick="this.remove();">' . $success . '</div>';
    }
    ?>

    <form action="" method="post" class="register">
        <label for="register-name">Name:</label>
        <input type="text" required placeholder="Enter your name" name="name" id="register-name">
        <br>
        <label for="register-email">Email:</label>
        <input type="email" required placeholder="Enter your email" name="email" id="register-email" style="text-transform: lowercase;">
        <br>
        <label for="register-password">Password:</label>
        <input type="password" required placeholder="Set password" name="password" id="register-password">
        <br>
        <label for="cpassword">Confirm Password:</label>
        <input type="password" required placeholder="Confirm password" name="cpassword" id="cpassword">
        <br>
        <input type="submit" value="Register now" class="btn" name="submit" id="submit-registration">
    </form>

    <span class="close2">&times;</span>
</div>
</div>



<!-- login modal -->

<div id="myModal" class="modal">
<?php
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password']; // No need to escape since we'll use prepared statements

    $stmt = mysqli_prepare($conn, "SELECT id, password FROM user_form WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $storedPassword = $row['password'];

        // Verify the password using password_verify
        if (password_verify($password, $storedPassword)) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            header('location: index.php');
        } else {
            $message[] = 'Incorrect password';
        }
    } else {
        $message[] = 'User not found';
    }
}
?>

<div class="modal-content">
    <h1>Log In</h1>
    <a id="registerButton" style="cursor: pointer;">
        Don't have an account? Sign up
    </a>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>

    <form action="" method="post" class="login">
        <label for="email">Email:</label>
        <input type="email" required placeholder="Email" name="email" id="email" style="text-transform: lowercase;">
        <br>
        <label for="password">Password:</label>
        <input type="password" required placeholder="Password" name="password" id="password">
        <br>
        <input type="submit" value="Log in" class="btn" name="submit">
        <a href="">Forgot your password?</a>
    </form>
    <span class="close">&times;</span>
</div>
</div>


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="../js/script.js"></script>

    <!-- modals script -->

<script>
    //REGISTER

    var modal2 = document.getElementById('myModal2');
    var closeButton2 = document.getElementsByClassName('close2')[0];
    var registerButton = document.getElementById('registerButton');
    var backButton = document.getElementById('backButton')

    function openModal2() {
        modal2.style.display = 'block';
        modal.style.display = 'none';
    }

    function closeModal2() {
        modal2.style.display = 'none';
    }

    registerButton.addEventListener('click', openModal2);

    backButton.addEventListener('click', openModalAgain);

    closeButton2.addEventListener('click', closeModal2);

    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = 'none';
        } else if (event.target == modal) {
            modal.style.display = 'none';
        }
    };


    //LOGIN

    var modal = document.getElementById('myModal');
    var closeButton = document.getElementsByClassName('close')[0];

    function openModal() {
        modal.style.display = 'block';
        modal2.style.display = 'none';
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    function openModalAgain() {
        modal.style.display = 'block';
        modal2.style.display = 'none';
    }

    function openModalOnceMore() {
        modal.style.display = 'block';
        modal2.style.display = 'none';
    }

    function closeModal() {
        modal.style.display = 'none';
    }

    var loginButton = document.getElementById('loginButton');
    loginButton.addEventListener('click', openModal);

    closeButton.addEventListener('click', closeModal);

    closeButton.addEventListener('click', closeModal);
</script>

</body>

</html>