<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// unset the session
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);


// Redirect the user to the login page
header("Location: index.php");
exit;
