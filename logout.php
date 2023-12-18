<?php
// Add session handling code here

// Destroy the session and redirect to the login page
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
