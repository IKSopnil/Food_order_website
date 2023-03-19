<?php include "navbar.php";
include "db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>

<?php session_start() ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- Latest version of jQuery from a CDN -->
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

</head>

<body>


  <?php 

if (isset($_POST['email']) && isset($_POST['password'])) {

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE user_email='$email' AND user_password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Valid login credentials
  // Start the session and redirect to the dashboard

  $_SESSION['user_email'] = $email;
  header('Location:index.php');
} 
else {
  // Invalid login credentials
  // Display an error message
  echo '<div class="alert alert-danger" role="alert">
  Invalid username or password
</div>';
}

}
?>

  <div class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #eee;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card bg-white" style="border-radius: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
            <div class="card-body p-5">
              <form class="mb-3 mt-md-4" method="POST">
                <h2 class="fw-bold mb-2 text-uppercase ">Ki-khaba</h2>
                <p class=" mb-5">Please enter your login and password!</p>
                <div class="mb-3">
                  <label for="email" class="form-label ">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="*******">
                </div>
                <!-- HTML code for the link -->
                <p class="small"><a id="forgot-password-link" class="text-primary" href="#">Forgot password?</a></p>

                <!-- HTML code for the card to be shown -->
                <div id="try-to-remember-card" class="card" style="display:none;">
                  <div class="card-body">
                    <h5 class="card-title ">Relax! Try to remember. If you still can't remember, you may need to see a doctor who specializes in mental illness.   </h5>
                   
                  </div>
                </div>

                <!-- JavaScript/jQuery code to show/hide the card -->
                <script>
                  $(document).ready(function() {
                    $("#forgot-password-link").click(function(e) {
                      e.preventDefault(); // prevent the link from redirecting to another page
                      $("#try-to-remember-card").show(); // show the card
                    });
                  });
                </script>

                <div class="d-grid mt-2">
                  <button class="btn btn-outline-dark" type="submit">Login</button>
                </div>
              </form>
              <div>
                <p class="mb-0  text-center">Don't have an account? <a href="signup.php" class="text-primary fw-bold">Sign
                    Up</a></p>
              </div>

            </div>


          </div>

        </div>

      </div>
    </div>
  </div>
  <?php include "footer.php" ?>
</body>

</html>

