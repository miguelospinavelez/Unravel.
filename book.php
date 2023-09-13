<?php

include 'config.php';
session_start();
$user_id =  $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

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
            <a href="book.php">products</a>
            <a href="login.php">Log in</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>


    </section>

    <!-- header section ends -->


    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background-image: url(imgs/microdose.jpg);">
                    <div class="content">
                        <span>microdose</span>
                        <h3>Psilocibin & Lion's Mane Capsules</h3>
                        <form>
                            <script src='https://checkout.epayco.co/checkout.js' data-epayco-key='0fc69c553288c82a6a6e83653039b150' class='epayco-button' data-epayco-amount='120000' data-epayco-tax='0.00' data-epayco-tax-ico='0.00' data-epayco-tax-base='120000' data-epayco-name='microdosis' data-epayco-description='microdosis' data-epayco-currency='cop' data-epayco-country='CO' data-epayco-test='false' data-epayco-external='false' data-epayco-response='' data-epayco-confirmation='' data-epayco-button='https://multimedia.epayco.co/dashboard/btns/btn2.png'>
                            </script>
                        </form>
                    </div>
                </div>



                <div class="swiper-slide slide" style="background-image:url(imgs/dust.jpg)">
                    <div class="content">
                        <span>mushroom powders</span>
                        <h3>Psilocibin Mushroom Powder</h3>
                        <form>
                            <script src='https://checkout.epayco.co/checkout.js' data-epayco-key='0fc69c553288c82a6a6e83653039b150' class='epayco-button' data-epayco-amount='180000' data-epayco-tax='0.00' data-epayco-tax-ico='0.00' data-epayco-tax-base='180000' data-epayco-name='Botanicos' data-epayco-description='Botanicos' data-epayco-currency='cop' data-epayco-country='CO' data-epayco-test='false' data-epayco-external='false' data-epayco-response='' data-epayco-confirmation='' data-epayco-button='https://multimedia.epayco.co/dashboard/btns/btn2.png'>
                            </script>
                        </form>

                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image:url(imgs/cubensis.jpg)">
                    <div class="content">
                        <span>Grow</span>
                        <h3>Psilocibin Starter Kit</h3>
                        <form>
                            <script src='https://checkout.epayco.co/checkout.js' data-epayco-key='0fc69c553288c82a6a6e83653039b150' class='epayco-button' data-epayco-amount='60000' data-epayco-tax='0.00' data-epayco-tax-ico='0.00' data-epayco-tax-base='60000' data-epayco-name='kit cultivo' data-epayco-description='kit cultivo' data-epayco-currency='cop' data-epayco-country='CO' data-epayco-test='false' data-epayco-external='false' data-epayco-response='' data-epayco-confirmation='' data-epayco-button='https://multimedia.epayco.co/dashboard/btns/btn2.png'>
                            </script>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        </div>
    </section>



    <!-- products section starts -->

    <section class="products">
        <h1>Try our Products</h1>
        <div class="box-container">
            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if (mysqli_num_rows($select_product) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            ?>
                    <div>
                        <form method="post" class="box" action="">
                            <div class="name"><?php echo $fetch_product['name']; ?></div>
                            <div class="price">$<?php echo $fetch_product['price']; ?> COP</div>
                            <img class="image" alt="" src="imgs/<?php echo $fetch_product['image']; ?>">

                            
                            <div class="amount"><input type="number" class="amount" min="1" name="product_quantity" value="1"></div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['image']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="submit" value="add to cart" class="btn">
                        </form>


                <?php
                };
            };
                ?>
                    </div>
        </div>


        <!-- <div class="box">
                <div class="image"><img src="imgs/microd.jpg" alt=""></div>
                <h3>Psilocibin & Lion's Mane Microdoses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo iure eius provident. Ducimus aliquid reiciendis adipisci eum cupiditate amet explicabo aspernatur quae dolorum accusantium perspiciatis eaque, suscipit odit expedita molestias.</p>
                <form>
            <script src='https://checkout.epayco.co/checkout.js'
                data-epayco-key='0fc69c553288c82a6a6e83653039b150' 
                class='epayco-button' 
                data-epayco-amount='120000' 
                data-epayco-tax='0.00'  
                data-epayco-tax-ico='0.00'               
                data-epayco-tax-base='120000'
                data-epayco-name='microdosis' 
                data-epayco-description='microdosis' 
                data-epayco-currency='cop'    
                data-epayco-country='CO' 
                data-epayco-test='false' 
                data-epayco-external='false' 
                data-epayco-response=''  
                data-epayco-confirmation='' 
                data-epayco-button='https://multimedia.epayco.co/dashboard/btns/btn2.png'> 
            </script> 
        </form>
            </div>
            <div class="box">
                <div class="image"><img src="imgs/powder.jpg"  alt=""></div>
                <h3>Psilocybin Mushroom Powder</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, nemo molestiae laudantium blanditiis nam voluptas exercitationem amet voluptates ratione ab, modi rem praesentium non inventore iste. Ab eos obcaecati at.</p>
                <form>
            <script src='https://checkout.epayco.co/checkout.js'
                data-epayco-key='0fc69c553288c82a6a6e83653039b150' 
                class='epayco-button' 
                data-epayco-amount='180000' 
                data-epayco-tax='0.00'  
                data-epayco-tax-ico='0.00'               
                data-epayco-tax-base='180000'
                data-epayco-name='Botanicos' 
                data-epayco-description='Botanicos' 
                data-epayco-currency='cop'    
                data-epayco-country='CO' 
                data-epayco-test='false' 
                data-epayco-external='false' 
                data-epayco-response=''  
                data-epayco-confirmation='' 
                data-epayco-button='https://multimedia.epayco.co/dashboard/btns/btn2.png'> 
            </script> 
        </form>
            </div>
            <div class="box">
                <div class="image"><img src="imgs/growbox.jpg"  alt=""></div>
                <h3>Starter Grow-Kit</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est quia impedit aliquam adipisci aperiam laborum sequi necessitatibus delectus ex neque? Doloribus consequatur eaque illum excepturi a praesentium et ducimus perferendis.</p>
                <form>
            <script src='https://checkout.epayco.co/checkout.js'
                data-epayco-key='0fc69c553288c82a6a6e83653039b150' 
                class='epayco-button' 
                data-epayco-amount='60000' 
                data-epayco-tax='0.00'  
                data-epayco-tax-ico='0.00'               
                data-epayco-tax-base='60000'
                data-epayco-name='kit cultivo' 
                data-epayco-description='kit cultivo' 
                data-epayco-currency='cop'    
                data-epayco-country='CO' 
                data-epayco-test='false' 
                data-epayco-external='false' 
                data-epayco-response=''  
                data-epayco-confirmation='' 
                data-epayco-button='https://multimedia.epayco.co/dashboard/btns/btn2.png'> 
            </script> 
        </form>
            </div> -->
        </div>
    </section>




    <!-- products section ends -->






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


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="js\script.js"></script>