<?php
include '../config.php';

if (isset($_POST['registerSubmit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $errors = array();

    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        $errors[] = 'All fields are required';
    }

    if ($password !== $cpassword) {
        $errors[] = 'Passwords do not match';
    }

    if (empty($errors)) {
        // Use password_hash to securely hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert user into the database
        $query = "INSERT INTO user_form (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $query)) {
            $success = 'Registered successfully';
        } else {
            $errors[] = 'Registration failed. Please try again.';
        }
    }
}
?>