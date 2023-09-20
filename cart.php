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
    header('location:products.php');
};

if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = 'cart quantity updated';
};

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | Shopping Cart</title>

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
            <a href="index.php">Profile</a>
            <a href="cart.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are you sure you want to log out?')">log out</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>


    </section>


    <!-- cart -->

    <section class="cart">

        <div class="container">

            <h1>shopping cart</h1>

            <table>

                <thead>
                    <th>image</th>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>total price</th>
                    <th>action</th>
                </thead>

                <tbody>

                    <?php
                    $grand_total = 0;
                    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id ='$user_id'") or die('query failed');
                    if (mysqli_num_rows($cart_query) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                    ?>
                            <tr>

                                <td><img src="imgs/<?php echo $fetch_cart['image']; ?>" alt="" height="130"></td>

                                <td><?php echo $fetch_cart['name']; ?></td>

                                <td>$<?php echo $fetch_cart['price']; ?> USD</td>

                                <td>
                                    <form action="" method="post">

                                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">

                                        <input type="number" min="1" class="quantity" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                                        
                                        <input type="submit" name="update_cart" id="" class="option-btn" value="update">

                                    </form>
                                </td>

                                <td>$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>.00 USD</td>

                                <td>
                                    <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?')">remove</a>
                                </td>

                            </tr>
                    <?php
                            $grand_total += $sub_total;
                        }
                    }
                    ?>

                    <tr class="table-bottom">

                        <td colspan="4">grand total :</td>

                        <td>$<?php echo $grand_total; ?>.00 USD</td>

                        <td>
                            <a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn">remove all</a>
                        </td>

                    </tr>

                </tbody>

            </table>

            <div class="cart-btn">
                <a href="" class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">check out</a>
            </div>

        </div>

    </section>


    <!-- button -->

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


    <!-- custom js file link -->
    <script src="js\script.js"></script>

</body>

</html>