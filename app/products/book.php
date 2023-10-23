<?php
include 'config.php';
session_start();
$user_id =  $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:products.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:products.php');
};

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];



    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already in cart';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES ('$user_id', '$product_name','$product_price', '$product_image', '$product_quantity')") or die('query failed');
        $message[] = 'product added to cart';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | Browse Our Products</title>

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

    <!-- header -->

    <section class="header">

        <a href="home.php" class="logo">Unravel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">archive</a>
            <a style="color:blueviolet; pointer-events: none;">products</a>
            <a href="index.php">Profile</a>
            <a href="book.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are you sure you want to log out?')">exit</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>


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


    <!-- home -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background-image: url(imgs/microdose.jpg);">
                    <div class="content">
                        <span>microdose</span>
                        <h3>Psilocybin & Lion Mane Capsules</h3>

                        <a href="1.php" class="btn">learn more</a>
                    </div>
                </div>



                <div class="swiper-slide slide" style="background-image:url(imgs/dust.jpg)">
                    <div class="content">
                        <span>mushroom powders</span>
                        <h3>Psilocybin Mushroom Powder</h3>

                        <a href="2.php" class="btn">learn more</a>

                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image:url(imgs/cubensis.jpg)">
                    <div class="content">
                        <span>Grow</span>
                        <h3>Psilocybin Starter Kit</h3>

                        <a href="3.php" class="btn">learn more</a>
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
        <a href="cart.php" class="cart-btn">cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
       
            <div class="box-container">

                <?php
                $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                if (mysqli_num_rows($select_product) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_product)) {
                ?>
             
                        <form method="post" class="box" action="">
                        <a href="<?php echo $fetch_product['id'];?>.php" class="product">
                            <div class="name"><?php echo $fetch_product['name']; ?></div>

                            <img class="image" alt="" src="imgs/<?php echo $fetch_product['image']; ?>">
                        </a>
                            <div class="description"><?php echo $fetch_product['description']; ?></div>

                            <div class="price">$<?php echo $fetch_product['price']; ?> USD</div>

                            <input type="number" class="amount" min="1" name="product_quantity" value="1">

                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">

                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">

                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">

                            <button type="submit" value="add to cart" name="add_to_cart" class="btn">add to cart</button>


                        </form>


                <?php
                    };
                };
                ?>
                 
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
            <p>© 2023 <span>Unravel.</span> | All rights reserved </p>
        </div>
    </section>


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="js\script.js"></script>
</body>


</html>