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
      if ($result->num_rows > 0) {

        $num = 0;
        while ($row = $result->fetch_assoc()) {
      ?>

          <tr>

            <td><?php echo ++$num ?></td>
            <td><?php echo $row[''] ?></td>
            <td><?php echo $row[''] ?></td>
            <td><?php echo $row[''] ?></td>
            <td><?php echo $row[''] ?></td>
            <td><?php echo $row[''] ?></td>
            <td><?php echo $row[''] ?></td>
            <td><?php echo $row[''] ?></td>

            <td>
              <form action="" method="post">

                <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                <button class="btn btn-danger" type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
              </form>
            </td>


          </tr>
      <?php
        }
      }
      ?>
</section>