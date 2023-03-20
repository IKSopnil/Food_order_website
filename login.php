<?php

include "db_connect.php";
session_start();



?>
<?php include "navbar.php"?>



<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- Latest version of jQuery from a CDN -->
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

</head>

<?php
    
    if(count($_POST)>0) {
       
        $result = mysqli_query($conn,"SELECT * FROM users WHERE user_email='" . $_POST["email"] . "' and user_password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["user_name"] = $row['user_name'];
        } else {
         echo '<div class="alert alert-danger" role="alert">
         Invalid password. 
       </div>';
       echo '<meta http-equiv="refresh" content="1;url=login.php">';
                exit();
       
        }
    }
    if(isset($_SESSION["user_id"])) {
    echo  '<div class="alert alert-success" role="alert">
    Welcome, You are logged in. 
  </div>';
  echo '<meta http-equiv="refresh" content="1;url=index.php">';
                exit();
    }
?>

<body>


  

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
                  <input type="email" required class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
                <label for="password" class="form-label ">Password</label>
                <div class="mb-3 d-flex">
                  
                  <input type="password" required class="form-control" name="password" id="password" placeholder="*******">
                  <span class="input-group-text"><i class="fas fa-eye"></i></span>
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

<script>
    // Show/hide password toggle
    const togglePassword = document.querySelector('.input-group-text');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.querySelector('i').classList.toggle('fa-eye-slash');
    });
  </script>
