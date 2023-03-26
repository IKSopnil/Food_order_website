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

</body>

</html>