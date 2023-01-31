<?php
session_start();

// End the current session
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit();
?>