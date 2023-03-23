<?php
session_start();

if (!isset($_SESSION['username'])) {
  // User is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>
<?php include "panelnavbar.php" ?>

<head>

</head>
<section class="container my-5">
  <h1 class="text-center mb-5">Pending Order</h1>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Addrss</th>
        <th scope="col">Phone</th>
        <th scope="col">Order Item</th>
        <th scope="col">Total</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    
    
    <tbody>
<?php
if (isset($_SESSION['cart_data'])) {
  // Display the cart data in the table
  $num = 0;
  foreach ($_SESSION['cart_data'] as $item) {
    $num++;
    echo "<tr>";
    echo "<td>{$num}</td>";
    echo "<td>{$_SESSION['user_name']}</td>";
    echo "<td>{$_SESSION['user_email']}</td>";
    echo "<td>{$_SESSION['user_address']}</td>";
    echo "<td>{$_SESSION['phone']}</td>";
    echo "<td>{$item['title']}</td>";
    echo "<td>{$item['price']}</td>";
    echo "<td></td>";
    echo "</tr>";
  }
}
?>
</tbody>

      
</section>