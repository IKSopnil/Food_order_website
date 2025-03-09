<?php
session_start();

if (isset($_POST['key'])) {
  $key = $_POST['key'];
  unset($_SESSION['cart'][$key]);
}


header("Location: cart.php");
exit;

