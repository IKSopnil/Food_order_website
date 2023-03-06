<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #eee;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card bg-white" style="border-radius: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
            <div class="card-body p-5">
              <form class="mb-3 mt-md-4">
                <h2 class="fw-bold mb-2 text-uppercase ">Ki-khaba</h2>
                <p class=" mb-5">Please enter your login and password!</p>
                <div class="mb-3">
                  <label for="email" class="form-label ">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="*******">
                </div>
                <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                <div class="d-grid">
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