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
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Order Item</th>
        <th scope="col">Total</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if (isset($_SESSION['cart_data'])) {
          // Group the items by user
          $grouped_items = array();
          foreach ($_SESSION['cart_data'] as $item) {
            $user_key = $_SESSION['user_email'];
            if (!isset($grouped_items[$user_key])) {
              $grouped_items[$user_key] = array(
                'name' => $_SESSION['user_name'],
                'email' => $_SESSION['user_email'],
                'address' => $_SESSION['user_address'],
                'phone' => $_SESSION['phone'],
                'items' => array(),
              );
            }
            $grouped_items[$user_key]['items'][] = $item;
          }

          // Display the grouped items in the table
          $num = 0;
          foreach ($grouped_items as $user) {
            $num++;
            echo "<tr>";
            echo "<td>{$num}</td>";
            echo "<td>{$user['name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['address']}</td>";
            echo "<td>{$user['phone']}</td>";
            echo "<td>";
            foreach ($user['items'] as $item) {
              echo "{$item['title']}<br>";
            }
            echo "</td>";
            echo "<td>";
            foreach ($user['items'] as $item) {
              echo "{$item['price']}<br>";
            }
            echo "</td>";
            echo "<td></td>";
            echo "</tr>";
          }
        }
      ?>
    </tbody>
  </table>
</section>
