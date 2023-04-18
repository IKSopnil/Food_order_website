<?php
session_start();


if (!isset($_SESSION['admin_username'])) {
  // User is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>



<?php include "panelnavbar.php" ?>
<!-- Content -->
<section>
<div class="container-fluid mt-5 text-center">
  <h1>Dashboard</h1>
  <p>Welcome to the admin dashboard!</p>
</div>
</section>
<section>
<div class="container text-center pt-5 ">
  <div class="row my-5">
    <div class="col-5 card mx-5 p-5 clickable">
      <h2>Revenue</h2>
    </div>
    <div class="col-5 card mx-5 p-5 clickable">
      <h2>Accepted Order</h2>
    </div>
  </div>
  <div class="row my-5">
    <div class=" col-5  card mx-5 p-5 clickable">
      <h2>New User</h2>
    </div>
    <div class=" col-5  card mx-5 p-5 clickable">
      <h2>Message</h2>
    </div>
  </div>
</div>
</section>
  <style>
    .card {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }
    h2 {
      margin-top: 0;
      font-size: 24px;
      font-weight: 600;
    }
    
  .clickable {
  cursor: pointer;
  transition: transform 0.3s ease-out;
}
  </style>




</html>