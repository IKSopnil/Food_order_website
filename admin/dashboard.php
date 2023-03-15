<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>


<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Admin Panel</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto">
					<button class="btn btn-secondary mx-4" type="button">
						Dashboard
					</button>
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
					<a href="order.php"><button class="btn btn-secondary mx-4" type="button">
							Order
						</button></a>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Content -->
	<div class="container-fluid mt-3">
		<h1>Dashboard</h1>
		<p>Welcome to the admin dashboard!</p>
	</div>

</body>

</html>