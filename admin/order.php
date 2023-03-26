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
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
     
    <?php
// include the database connection code
require_once "db_connect.php";

// check if the user and cart data are set
if (isset($_SESSION['cart_data']) && isset($_SESSION['user_id'])) {
  // Group the items by user
  $user_id = $_SESSION['user_id'];
  $sql = "SELECT * FROM users WHERE user_id = {$user_id}";
  $result = $conn->query($sql);

  if ($result) {
    // fetch user data
    $user = $result->fetch_assoc();
    $user_key = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : "";

    // initialize the grouped items array
    $grouped_items = array(
      $user_key => array(
        'name' => $user['user_name'],
        'email' => $user['user_email'],
        'address' => $user['user_address'],
        'phone' => $user['phone'],
        'items' => array(),
      )
    );

    // group the items
    foreach ($_SESSION['cart_data'] as $item) {
      $grouped_items[$user_key]['items'][] = $item;
    }

    // display the grouped items in the table
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
  } else {
    // handle database error
    echo "Error: " . $conn->error;
  }
} else {
  // handle missing data error
  echo "Error: User or cart data not set";
}
?>


    </tbody>
  </table>
</section>
