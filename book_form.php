<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $products = $_POST['products'];
    $delivery = $_POST['delivery'];
    $date = $_POST['date'];
    $payment = $_POST['payment'];

    $request = "insert into book_form(name, email, phone, address, products, delivery, date, payment) values('$name','$email','$phone','$address','$products','$delivery','$date','$payment')";

    mysqli_query($connection, $request);

    header('location:book.php');
}else{
    echo 'something went wrong try again';
}

?>