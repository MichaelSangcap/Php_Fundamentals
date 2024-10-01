<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>

    <h1>Fill in the input fields below</h1>

    <!-- Login Form (This will always be shown) -->
    <form action="handleForm.php" method="POST">
        <p><input type="text" placeholder="First name here" name="firstName"></p>
        <p><input type="password" placeholder="Password here" name="password"></p>
        <p><input type="submit" value="Submit" name="submitBtn"></p>
    </form>

    <!-- Show logged-in user's info and logout button below the form -->
    <?php
    if (isset($_SESSION['firstName'])) {
        ob_start();
        echo "<h2>User logged in: " . $_SESSION['firstName'] . "</h2>";
        echo "<h2>Password Hash: " . $_SESSION['password'] . "</h2>";
        echo '<form action="unset.php" method="POST"><button type="submit">Logout</button></form>';
    }
    ?>
   <!-- Display error message if login is blocked -->
    <?php
    if (isset($_SESSION['error'])) {
        ob_clean();
        echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']); // Clear the error message after displaying it
    }
    ?>

</body>
</html>
