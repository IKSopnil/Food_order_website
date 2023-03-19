<?php


if (!isset($_SESSION['username'])) {
	// User is not logged in, redirect to the login page
	header("Location: login.php");
	exit();
}
?>

<head>
	<title>Admin Dashboard</title>

	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</head>
<nav class=" navbar-expand-lg  navbar navbar-light bg-light py-lg-4  ">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Admin Panel</a>
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
				<li>
					<a href="order.php"><button class="btn btn-secondary mx-4" type="button">
							Order
						</button></a>
				</li>
				<li>
					<a href="addpost.php"><button class="btn btn-secondary mx-4" type="button">
							Add Post
						</button></a>

				</li>
			</ul>

			<ul class="navbar-nav ms-auto">
				<?php if (isset($_SESSION['username'])) { ?>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
				<?php } ?>
			</ul>

		</div>

	</div>

</nav>