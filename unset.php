<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session completely
header('Location: index.php'); // Redirect back to the homepage
exit();
?>
