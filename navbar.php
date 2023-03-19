<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ki-khaba</title>

  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- google font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<section class="" style="	background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url(image/hero.jpg);	 ">
  <div class="">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <div class="navbar-nav ">
            <a href="index.php"><img src="image/logo.png" class="img-fluid" alt="..." style="height: 110px;width:90px"></a>
          </div>

        </div>
        <div>
          <div>
            <div>
              <div class="my-4">
                <p class="nav-title-kikaba" style="font-family: Sofia, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;color:white">Ki-Khaba</a></p>
              </div>

            </div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link" href="offer.php">Offer</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link " href="cart.php">Cart</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link " href="about.php">About</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link " href="contract.php">Contract</a>
                  </li>

                </ul>

              </div>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
            <?php if (isset($_SESSION["user_id"])) { ?>
              <div class="dropdown">
  <button class="btn dropdown-toggle"style="color: white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user "style="color: white;"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Settings</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">Logout</a>
    
  </div>
</div>
<script>
$(document).ready(function(){
  $('.dropdown-toggle').dropdown();
});
</script>


            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" id="nav_login" aria-current="page" href="login.php">Login</a>
              </li>
            <?php } ?>
          </ul>
        </div>

      </div>
    </nav>

  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
