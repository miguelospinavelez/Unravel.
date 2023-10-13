<?php
include 'config.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header('location:book.php');
    exit; 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | Products</title>

    <!-- favicon link -->
    <link rel="icon" type="image/x-icon" href="imgs/icons/fav/6.ico">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- header section starts -->

    <section class="header">

        <a href="home.php" class="logo">Unravel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">archive</a>
            <a style="color:blueviolet; pointer-events: none;">products</a>
            <a href="login.php">Log in</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>


    </section>

    <!-- home -->


    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background-image: url(imgs/microdose.jpg);">
                    <div class="content">
                        <span>microdose</span>
                        <h3>Psilocybin & Lion Mane Capsules</h3>

                        <a href="book.php" class="btn">learn more</a>
                    </div>
                </div>



                <div class="swiper-slide slide" style="background-image:url(imgs/dust.jpg)">
                    <div class="content">
                        <span>mushroom powders</span>
                        <h3>Psilocybin Mushroom Powder</h3>

                        <a href="book.php" class="btn">learn more</a>

                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image:url(imgs/cubensis.jpg)">
                    <div class="content">
                        <span>Grow</span>
                        <h3>Psilocybin Starter Kit</h3>

                        <a href="book.php" class="btn">learn more</a>
                    </div>
                </div>

            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        </div>
    </section>



    <!-- products -->

    <section class="products">
        <h1>Try our Products</h1>
        <div class="box-container">
            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if (mysqli_num_rows($select_product) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            ?>

                    <form method="post" class="box" action="">

                        <div class="name"><?php echo $fetch_product['name']; ?></div>

                        <img class="image" alt="" src="imgs/<?php echo $fetch_product['image']; ?>">

                        <div class="description"><?php echo $fetch_product['description']; ?></div>

                        <div class="price">$<?php echo $fetch_product['price']; ?> USD</div>

                        <input type="number" class="amount" min="1" style="user-select: none; pointer-events: none; opacity:0.3;" name="product_quantity" value="1">

                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">

                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">

                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">

                        <a href="login.php" class="btn" >Buy now</a>

                    </form>


            <?php
                };
            };
            ?>

        </div>
        </div>
    </section>


    <!-- message -->

    <div>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
            }
        }
        ?>
    </div>


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
    <script src="js\script.js"></script>

</body>

</html>