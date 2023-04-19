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
<section class="container  text-center pt-5 ">
  <div class="row my-5">
    <div class="col-5 card mx-5 p-5 clickable" id="User">
      <h2>User</h2>
    </div>
    <div class="col-5 card mx-5 p-5 clickable" id="accepted-order">
      <h2>Accepted Order</h2>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-5 card mx-5 p-5 clickable" id="allpost">
      <h2>All Post</h2>
    </div>
    <div class="col-5 card mx-5 p-5 clickable" id="addpost">
      <h2>Add Post</h2>
    </div>
  </div>

</section>
<script>
  const userButton = document.getElementById("User");
  userButton.addEventListener("click", function() {
    window.location.href = "user.php";
  });

  const orderButton = document.getElementById("accepted-order");
  orderButton.addEventListener("click", function() {
    window.location.href = "accepted_order.php";
  });

  const allpostButton = document.getElementById("allpost");
  allpostButton.addEventListener("click", function() {
    window.location.href = "post_category.php";
  });

  const addpostButton = document.getElementById("addpost");
  addpostButton.addEventListener("click", function() {
    window.location.href = "addpost.php";
  });
</script>


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

  .clickable:hover {
    cursor: pointer;
    transform: scale(1.1);
    color: #FA8F8F;
  }
</style>

</html>