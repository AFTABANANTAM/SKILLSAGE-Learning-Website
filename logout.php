<?php
session_start();          // Start the session
session_unset();          // Unset all session variables
session_destroy();        // Destroy the session

// Redirect to login page
header("Location: /mongodb_php/BYTEVERSE_PROJECT/SignUp/login.php");
exit();


?>