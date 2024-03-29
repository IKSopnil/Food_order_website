<?php


if (!isset($_SESSION['admin_username'])) {
	// User is not logged in, redirect to the login page
	header("Location: login.php");
	exit();
}
?>

<head>
	<title >Admin Dashboard</title>
	<!--font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</head>
<nav class=" navbar-expand-lg  navbar navbar-light bg-light py-lg-4 ">
	<div class="container-fluid p-3">
		<a class="navbar-brand " style="color:red" href="#">Admin Panel</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<a href="dashboard.php"><button class="btn btn-secondary mx-4" type="button">
						Dashboard
					</button></a>
				<li class="nav-item mx-4">
					<a href="user.php"><button class="btn btn-secondary " type="button">
							User
						</button></a>
				</li>
				<li class="nav-item mx-4">
					<a href="post_category.php">
						<button class="btn btn-secondary " type="button">
							All Post
						</button>
					</a>
				</li>
				<?php
				include "db_connect.php";
				// Count the number of pending orders
				$sql = "SELECT COUNT(*) AS count FROM orders WHERE is_pending=1";
				$result = mysqli_query($conn, $sql);
				$count = mysqli_fetch_assoc($result)['count'];
				?>
				<!-- Navigation Item - Order -->
				<li>
					<a href="order.php">
						<button class="btn btn-secondary mx-4" type="button">
							Order
							<?php if ($count > 0) : ?>
								<span style="color:white;background-color:red" class="badge badge-danger badge-pill"><?php echo $count; ?></span>
							<?php endif; ?>
						</button>

					</a>
				</li>
				<li>
					<a href="addpost.php"><button class="btn btn-secondary mx-4" type="button">
							Add Post
						</button></a>
				</li>
				<li>
					<a href="accepted_order.php"><button class="btn btn-secondary mx-4" type="button">
							Accepted Order
						</button></a>
				</li>
			</ul>
			<ul class="navbar-nav mx-5 px-4">
				<?php if (isset($_SESSION['admin_username'])) { ?>
					<div class="btn-group dropstart">
						<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
							<i class="far fa-user-circle"></i>
						</button>
						<ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
							<li><a class="dropdown-item" href="logout.php">Logout</a></li>
						</ul>
					</div>
				<?php
				}
				?>
			</ul>
		</div>
	</div>

</nav>
<style>
	
	.navbar .btn-secondary {
		background-color: #fff;
		color: #333;
		font-weight: bold;
	}
	.navbar .btn-secondary:hover {
		background-color: #FA8F8F;
		transition: .5s;
		transform: scale(1.1);
		}
</style>

