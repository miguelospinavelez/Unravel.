<?php

include '../config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header('location:about.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | About Us</title>

    <!-- favicon link -->
    <link rel="icon" type="image/x-icon" href="../imgs/icons/fav/9.ico">

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
            <a style="color:blueviolet; pointer-events: none;">about</a>
            <a href="../archive/package.php">archive</a>
            <a href="../products/book.php">products</a>
            <a id="loginButton" style="cursor: pointer;">Log in</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>


    <div class="heading" style="background: url(../imgs/abt/2.png) no-repeat;">
        <h1>about us</h1>
    </div>

    <!-- about -->

    <section class="about">

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, voluptatem! Corrupti ipsum minus, eum, quam, recusandae ducimus similique cum magni voluptates tempora delectus autem debitis veniam nesciunt deserunt cupiditate dolor adipisci totam voluptas esse enim sed earum. Ratione id cupiditate cum placeat totam excepturi veniam voluptatum eligendi fugit labore! Harum placeat iusto officia, alias illum quo. Facere dolorem esse quibusdam assumenda et tempore, optio totam reprehenderit pariatur autem unde quos?</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste quia atque incidunt iure, fuga dolore perspiciatis tempora blanditiis odio itaque expedita voluptatibus totam, nostrum asperiores! Minus cupiditate quia fuga? Atque libero porro officia inventore. Dignissimos dolore totam neque consequuntur quos! Porro itaque ut fugiat, sint, earum necessitatibus iure aut deserunt perferendis veniam quidem qui perspiciatis vel. In asperiores facere incidunt iure error necessitatibus repellendus voluptas, dolor fugiat odit beatae deserunt ex? Libero voluptates quibusdam optio amet ducimus quaerat nesciunt, dolores, reiciendis voluptatibus quod totam sint facilis inventore tempore, voluptatum laudantium cumque temporibus eum nihil eius distinctio id. Aperiam, temporibus est!</p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>world-wide delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable prices</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
        </div>

    </section>



    <!-- reviews -->

    <section class="reviews">

        <h1 class="heading-title"> client reviews </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, iure. Esse accusamus deleniti doloribus repellat repudiandae ea odit veniam, eaque neque necessitatibus error voluptatum voluptatem officia ullam laborum ratione assumenda ad fugiat ex nisi? Aliquid enim reprehenderit nihil aperiam aliquam?</p>
                    <h3>Derek Gillespie</h3>
                    <span>therapist</span>
                </div>


                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia similique quos assumenda consequatur eos, totam animi qui asperiores numquam molestias, autem deserunt neque ad! Neque!</p>
                    <h3>Victoria Bishop</h3>
                    <span>chronic depression patient</span>
                </div>


                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt cum totam hic quos enim reprehenderit necessitatibus pariatur error vitae adipisci tempora corporis, molestias officia reiciendis expedita, ex iste unde quae excepturi, consectetur obcaecati asperiores nihil.</p>
                    <h3>Silvio Hernandez</h3>
                    <span>psychedelics coach</span>
                </div>


                <div class="swiper-slide slide">
                    <div class="stars"><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ipsam, debitis fugiat repudiandae esse nulla veniam asperiores. Animi ut minima distinctio exercitationem assumenda magnam quas veritatis ratione id! Dolorum enim hic vero laboriosam quis illum sed iste neque recusandae quos corporis blanditiis magni perspiciatis, omnis sapiente aliquid et veritatis, fugit ipsum! Dolorem consequuntur non nobis neque. Magni voluptates perspiciatis neque!</p>
                    <h3>Katia Vashchenko</h3>
                    <span>Cancer survivor</span>
                </div>
            </div>

        </div>

    </section>






    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="../home/home.php"> <i class="fas fa-angle-rig"></i>home</a>
                <a href="../about/about.php"> <i class="fas fa-angle-rig"></i>about</a>
                <a href="../archive/package.php"> <i class="fas fa-angle-rig"></i>archive</a>
                <a href="../products/book.php"> <i class="fas fa-angle-rig"></i>products</a>
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


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>

</body>

</html>