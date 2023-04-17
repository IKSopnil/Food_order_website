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
<div class="container-fluid mt-3">
	<h1>Dashboard</h1>
	<p>Welcome to the admin dashboard!</p>
</div>
<section>
<h1>Total Accepted Order
<?php
				include "db_connect.php";
				// Count the number of pending orders
				$sql = "SELECT COUNT(*) AS count FROM orders WHERE is_pending=0";
				$result = mysqli_query($conn, $sql);
				$count = mysqli_fetch_assoc($result)['count'];
				?>

				<!-- Navigation Item - Order -->
				
					<a href="order.php">
						<button class="btn btn-secondary mx-4" type="button">
							Accepted
							<?php if ($count > 0) : ?>
								<span style="color:white;background-color:red" class="badge badge-danger badge-pill"><?php echo $count; ?></span>
							<?php endif; ?>
						</button>
						
					</a>
				
</h1>
<h1>New User</h1>
<h1>Message</h1>
</section>
</body>

</html>