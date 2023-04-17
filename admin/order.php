<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
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
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>



    </tbody>
    <?php
    include "db_connect.php";
    $sql = "SELECT orders.order_id, users.user_name, users.user_email, users.user_address, users.phone, orders.order_item, orders.price, orders.quantity, orders.total FROM orders INNER JOIN users ON orders.user_id=users.user_id ORDER BY user_name ASC";
    $result = mysqli_query($conn, $sql);

    // Loop through the result set and generate table rows
    if (mysqli_num_rows($result) > 0) {
      $serial = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$serial}</td>";
        echo "<td>{$row['user_name']}</td>";
        echo "<td>{$row['user_email']}</td>";
        echo "<td>{$row['user_address']}</td>";
        echo "<td>{$row['phone']}</td>";
        $order_items = explode(',', $row['order_item']);

        // Loop through the order items array and display each item on a separate line
        echo "<td>";
        foreach ($order_items as $item) {
          echo "{$item}<br>";
        }
        echo "</td>";

        $prices = explode(',', $row['price']);
        echo "<td>";
        foreach ($prices as $price) {
          echo "{$price}<br>";
        }

        echo "<td>{$row['quantity']}</td>";
        echo "<td>{$row['total']}</td>";
        echo "<td><button class='btn btn-primary'>Accept</button> <button class='btn btn-danger'>Cancel</button></td>";
        echo "</tr>";
        $serial++;
      }
    } else {
      echo "<tr><td colspan='10'>No pending orders found</td></tr>";
    }
    ?>
  </table>
</section>