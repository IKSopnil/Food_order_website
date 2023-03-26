<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
  // User is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>
<?php include "panelnavbar.php"; ?>
<?php include "db_connect.php";


$sql = "SELECT * FROM users";

$result = $conn->query($sql);
?>


<?php
// Check if the delete button was clicked
if (isset($_POST['delete'])) {
  // Retrieve the user ID from the POST parameter
  $user_id = $_POST['user_id'];
  // Check for errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare the SQL statement to delete the user
  $sql = "DELETE FROM users WHERE user_id = $user_id";

  // Execute the SQL statement
  if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success" role="alert">
     User has been deleted !
</div>';
    echo '<meta http-equiv="refresh" content="1;url=user.php">';
    exit();
  } else {
    echo "Error deleting user: " . $conn->error;
  }

  // Close the database connection
  $conn->close();
}

// Retrieve the user list from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<section class="container my-5">
  <h1 class="text-center mb-5">User List</h1>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Address</th>
        <th scope="col">phone</th>
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
            <td><?php echo $row['user_name'] ?></td>
            <td><?php echo $row['user_email'] ?></td>
            <td><?php echo $row['user_password'] ?></td>
            <td><?php echo $row['user_address'] ?></td>
            <td><?php echo $row['phone'] ?></td>
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
    </tbody>
  </table>
</section>
