<?php
session_start();
include_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
    // check user email address and password against the database
    $user_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if (mysqli_num_rows($user_query) > 0) {
        // user email address and password match
        $row = mysqli_fetch_assoc($user_query);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
    } else {
        echo "Please check your email address or password!";
    }
} else {
    echo "Email and password are required!";
}
