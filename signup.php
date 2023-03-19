<?php include "db_connect.php";

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?php include "navbar.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_email = $_POST['email'];

  // Check if email already exists
  $sql = "SELECT COUNT(*) as count FROM users WHERE user_email = '$user_email'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if ($row['count'] > 0) {
    // Email already exists, show error message
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    This email is already registered!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } else {
    // Retrieve form data
    $user_name = $_POST["name"];
    $user_address = $_POST["address"];
    $user_password = $_POST["password"];
    $phone = $_POST["phone"];
    // Hash the password
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);


    // Check if passwords match
    if ($user_password === $_POST["confirm_password"]) {
      // Insert data into database
      $sql = "INSERT INTO users (user_name, user_address, user_email, user_password, phone) 
              VALUES ('$user_name', '$user_address', '$user_email', '$hashed_password', '$phone')";

      if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">
          Your account has been successfully created!
        </div>';
        echo '<meta http-equiv="refresh" content="1;url=signup.php">';
            exit();
      } else {
        echo '<div class="alert alert-danger" role="alert">
          Error inserting data: ' . $conn->error . '
        </div>';
      }
    } else {
      // Passwords don't match, show error message
      echo '<div class="alert alert-danger" role="alert">
        Passwords do not match.
      </div>';
    }
  }
}
?>


<section class="" style="background-color: #eee;">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center p-5">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
            <div class="text-center mb-5">
              <img src="image/kikaba.PNG" class="img-fluid " alt="...">
            </div>
            <div class="row justify-content-center ">
              <div class="col-lg-6   ">



                <form class="mx-1 mx-md-4" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom: 10%;" class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="" name="name" class="form-control" required />
                      <label class="form-label" for="">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom: 10%;" class="fas fa-location-dot fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" class="form-control" name="address" id="inputAddress" required placeholder="1234 Main St">
                      <label for="inputAddress">Address</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom: 10%;" class="fas fa-city fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" class="form-control" id="inputCity">
                      <label for="inputCity">City</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i style="margin-bottom: 10%;" class="fas fa-map fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Chattagram</option>
                        <option>Dhaka</option>
                        <option>Sylhet</option>
                        <option>Rajshahi</option>
                        <option>Barishal</option>
                        <option>Khulna</option>
                      </select>
                      <label for="inputState">State</label>
                    </div>
                  </div>





              </div>
              <div class="col-lg-6 ">


                <div class="d-flex flex-row align-items-center mb-4">
                  <i style="margin-bottom: 10%;" class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="email" id="" name="email" required class="form-control" placeholder="example@gmail.com" />
                    <label class="form-label" for="">Your Email</label>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i style="margin-bottom: 10%;" class="fas fa-lock fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="password" id="" name="password" required class="form-control" />
                    <label class="form-label" for="">Password</label>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i style="margin-bottom: 10%;" class="fas fa-key fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="password" id="" name="confirm_password" required class="form-control" />
                    <label class="form-label" for="">Repeat your password</label>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i style="margin-bottom: 10%;" class="fas fa-phone fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    <input type="text" id="phone" name="phone" required class="form-control" placeholder="+88" />
                    <label class="form-label" for="phone">Phone</label>
                  </div>
                </div>
              </div>

            </div>
            <div class="form-check d-flex justify-content-center mb-5">
              <input class="form-check-input me-2" type="checkbox" value="" id="" />
              <label class="form-check-label" for="">
                I agree all statements in <a href="#!">Terms of service</a>
              </label>
            </div>


            <div class="text-center mb-3">
              <button class="btn btn-outline-dark w-50" type="submit">Sign-Up</button>
            </div>
            </form>
            <p class="mb-0  text-center">Have an account? <a href="login.php" class="text-primary fw-bold">Login</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php include "footer.php" ?>