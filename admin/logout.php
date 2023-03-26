<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// unset the session
unset($_SESSION["admin_username"]);

// Redirect the user to the login page
header("Location: login.php");
exit;
