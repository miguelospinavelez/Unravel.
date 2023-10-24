<?php
include '../config.php';
if (isset($_POST['loginSubmit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT id, password FROM user_form WHERE email = '$email'") or die('Query failed');

    if (mysqli_num_rows($select) === 1) {
        $row = mysqli_fetch_assoc($select);
        $storedPassword = $row['password'];

        // Use password_verify to check the entered password against the stored hash
        if (password_verify($password, $storedPassword)) {
            // Password is correct
            session_start();
            $_SESSION['user_id'] = $row['id'];
        } else {
            $errors[] = 'Incorrect password';
        }
    } else {
        $errors[] = 'User not found';
    }
}
?>