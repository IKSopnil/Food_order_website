<?php
session_start();

if(!isset($_SESSION['username'])) {
  // User is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>
<?php include "panelnavbar.php" ?>