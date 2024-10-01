<?php
session_start();

// Check if a user is already logged in
if (isset($_SESSION['firstName'])) {
    // Prevent login if someone is already logged in
    $_SESSION['error'] = "There is a user still logged in, wait for them to log out first.";
    header('Location: index.php');
    exit();
}

// Check if submitBtn exists
if (isset($_POST['submitBtn'])) {

    // Get the first name and password from the form
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']); // Hash the password

    // Set the session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Redirect back to index.php to display user information
    header('Location: index.php');
    exit();
}
?>
