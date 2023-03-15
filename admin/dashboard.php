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
						<button class="btn btn-secondary " type="button">
							User
						</button>
					</li>
					<li class="nav-item mx-4">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								Category
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="#">Appetizer</a></li>
								<li><a class="dropdown-item" href="#">Main Course</a></li>
								<li><a class="dropdown-item" href="#">Dessert</a></li>
								<li><a class="dropdown-item" href="#">Beverage</a></li>
								<li><a class="dropdown-item" href="#">Offer</a></li>

							</ul>
						</div>
					</li>
					<button class="btn btn-secondary mx-4" type="button">
							Order
						</button>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Content -->
	<div class="container-fluid mt-3">
		<h1>Dashboard</h1>
		<p>Welcome to the admin dashboard!</p>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>

</html>