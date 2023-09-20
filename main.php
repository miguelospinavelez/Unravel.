<?php

include 'config.php';

if (!isset($user_id)) {
   
}else{
session_start();
$user_id =  $_SESSION['user_id'];
}

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Unravel. | Microdosing & Mushroom Cultivation  </title>

    <!-- favicon link -->
    <link rel="icon" type="image/x-icon" href="imgs/icons/favicon.ico">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- header -->

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




    <!-- home -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background-image: url(imgs/fungi.jpg);">
                    <div class="content">
                        <span>discover, heal, connect</span>
                        <h3>integrate the power of mushrooms into your life</h3>
                        <a href="book.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image:url(imgs/heal.jpg)">
                    <div class="content">
                        <span>discover, heal, connect</span>
                        <h3>unravel your self</h3>
                        <a href="book.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image:url(imgs/couple-cover-image-holding-hands.jpg)">
                    <div class="content">
                        <span>discover, heal, connect</span>
                        <h3>connect with those you love</h3>
                        <a href="book.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        </div>
    </section>




    <!-- benefits -->

    <section class="services">

        <h1 class="heading-title">take the next step</h1>

        <div class="box-container">
            <div class="box">
                <img src="imgs/" alt="">
                <h3>Explore</h3>
            </div>

            <div class="box">
                <img src="imgs/" alt="">
                <h3>Heal</h3>
            </div>

            <div class="box">
                <img src="imgs/" alt="">
                <h3>Connect</h3>
            </div>

            <div class="box">
                <img src="imgs/" alt="">
                <h3>Grow</h3>
            </div>

        </div>
    </section>




    <!-- about -->

    <section class="home-about">
        <div class="image">
            <img src="imgs/" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corrupti quod ipsam totam, itaque vero vel aut optio ad harum laudantium? Voluptatem architecto eaque veniam nisi, voluptates fuga dignissimos praesentium illum eveniet. Minima sit expedita dolorum excepturi similique nam, maiores, accusamus tempore eveniet molestiae facilis. Facere possimus sit accusantium at.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>



    <!-- archive -->

    <section class="home-packages">
        <h1 class="heading-title"> articles & studies </h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="imgs/micr.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Introduction to microdosing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet sequi omnis ipsam exercitationem, corrupti illo quis rerum facere! Voluptatum quibusdam debitis facere magni sunt error voluptas beatae commodi optio.</p>
                    <a href="package.php" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="imgs/labs.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Studies on Psilocibin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet sequi omnis ipsam exercitationem, corrupti illo quis rerum facere! Voluptatum quibusdam debitis facere magni sunt error voluptas beatae commodi optio.</p>
                    <a href="package.php" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="imgs/meditation.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Meditation Vault</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet sequi omnis ipsam exercitationem, corrupti illo quis rerum facere! Voluptatum quibusdam debitis facere magni sunt error voluptas beatae commodi optio.</p>
                    <a href="package.php" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="imgs/mushrms.jpg" alt="">
                </div>
                <div class="content">
                    <h3>mushrooms & fungi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet sequi omnis ipsam exercitationem, corrupti illo quis rerum facere! Voluptatum quibusdam debitis facere magni sunt error voluptas beatae commodi optio.</p>
                    <a href="package.php" class="btn">Read</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>



    <!-- offer -->

    <section class="home-offer">
        <div class="content">
            <h3>Grow your own mushrooms</h3>
            <img src="imgs/growbox.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero vel voluptatem ea nam maxime porro deserunt aspernatur voluptatibus, quia odio.</p>
            <a href="book.php" class="btn">Starter Kit</a>
        </div>
    </section>



    <!-- footer -->

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
                <a href="contact.php"> <i class="fas fa-angle-right"></i>contact us</a>
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




    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>