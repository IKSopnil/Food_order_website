<?php
include "db_connect.php";

session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ki-khaba</title>
  <link rel="stylesheet" href="style.css">

  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- google font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
  <!--navbar-->
  <section class="">
    <?php include "navbar.php" ?>

  </section>

  <!--hero-->
  <section id="hero" class="hero">
    <div>
      <div class="hero-content">
        <h1>Order Delicious Food Online</h1>
        <p style="margin-bottom:10%">Get your favorite food delivered straight to your doorstep</p>
        <a href="cart.php" class="button ">Order Now</a>
      </div>
      <form method="post" action="search.php" class="srch text-center my-5">
        <input type="text" name="search" id="search" placeholder="Search for foods">
        <button type="submit" name="submit" class="btn  mx-2">
          <i class="fas fa-search"></i>
        </button>
      </form>



    </div>
    </div>
  </section>
  <section class="services" id="services">
    <h2 style="margin-top:3%">Our Services</h2>
    <p>Experience hassle-free food delivery with our reliable and efficient service</p>
    <div class="services-container " style="padding-top:5%;padding-bottom:5%">
      <div class="service mx-auto">
        <i class="fas fa-laptop"></i>
        <h3>Online Ordering</h3>
        <p>Order your favorite food online and get it delivered to your doorstep.</p>
      </div>
      <div class="service ">
        <i class="fas fa-cart-plus"></i>
        <h3>Special Offers</h3>
        <p>Provide special offers to customers.</p>
      </div>
      <div class="service mx-auto">
        <i class="fas fa-biking"></i>
        <h3>Delivery</h3>
        <p>Order your food ahead of time and pick it up at our restaurant.</p>
      </div>
    </div>
  </section>
  <!-- category-->
  <section class="menu">
    <h2>Our Menu</h2>
    <div class="menu-categories ">
      <ul class="nav nav-pills justify-content-center flex-wrap">
        <li><a href="#Appetizers" type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Appetizers</a></li>
        <li><a href="#Main Courses" type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2">Main Courses</a></li>
        <li><a href="#Desserts" type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3">Desserts</a></li>
        <li><a href="#Beverages" type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4">Beverages</a></li>

      </ul>
      <p style="margin-top:1%" ;>Select your desired category.</p>

    </div>


  </section>
  <!--slide-->
  <section style="background-color: #F7F6F2;" class="d-flex justify-content-center align-items-center">

    <div id="carouselExample" class="carousel slide">

      <div class="carousel-inner ">
        <?php include 'catagory/appetizer.php'; ?>
        <?php include 'catagory/main_course.php'; ?>
        <?php include 'catagory/dessert.php'; ?>
        <?php include 'catagory/beverage.php'; ?>
      </div>
    </div>
  </section>

  
  <!--database need to update ,working with apptze table for demo-->
<?php 
include "top_rated.php";
?>

  <section>
    <div id="nearby_resturant" style="background-color: #F7F6F2;" class="d-flex justify-content-center align-items-center">
      <div class="row  p-5">
        <h1 class="text-center " style="padding-bottom: 4%;">Nearby Restaurants</h1>
        <div class="col justify-content-center align-items-center " style="text-align: center;">



          <div id="map-container-google-1" class="z-depth-1-half map-container embed-responsive my-5" style="height: 100%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7206.2920677960865!2d91.84081699891163!3d22.367914764615197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1snearby%20restaurants!5e1!3m2!1sen!2sbd!4v1677661087116!5m2!1sen!2sbd" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col nearby-restaurants d-flex justify-content-center align-items-center my-5">
          <p class="px-4"><span style="font-weight:bold">Nearby Restaurants:</span> Bringing Local Flavor to Your Doorstep

            Finding great food can be a real adventure, and it's no secret that people love to dine out at restaurants. But sometimes, you don't have the time or energy to venture too far from home. That's where nearby restaurants come in. These restaurants bring the local flavor right to your doorstep, giving you a taste of the area's best food without ever having to leave your neighborhood.

            One of the best things about nearby restaurants is that they offer a wide variety of cuisine types, from classic American fare to international dishes. Whether you're in the mood for pizza, sushi, or tacos, you're sure to find a nearby restaurant that offers exactly what you're looking for.

            Beyond the cuisine, nearby restaurants also provide a convenient and comfortable dining experience. Many of these restaurants feature cozy, welcoming interiors, as well as outdoor seating areas for those warm summer nights. Plus, with the rise of food delivery services, you can enjoy your favorite nearby restaurant meals from the comfort of your own home.

            Another advantage of nearby restaurants is that they often source their ingredients from local farms and suppliers, supporting the community and offering fresher, healthier food options. This farm-to-table approach not only benefits the local economy but also ensures that you are getting the best possible ingredients in your meals.</p>
        </div>

      </div>
    </div>
  </section>


</body>

<section class="">
  <?php include 'footer.php'; ?>


</section>
<!--cart-->

<div class="floating-cart">

  <?php
  // Check if the cart array is set and not null
  if (isset($_SESSION['cart'])) {
    // Get the number of items in the cart
    $num_items_in_cart = count($_SESSION['cart']);

  ?>
    <a href="cart.php" id="kol">
      <i class="fas fa-shopping-cart"></i>
      <span class="badge badge-pill rounded-circle "><?php echo $num_items_in_cart; ?></span>
    </a>
  <?php } ?>
</div>

<style>
  .floating-cart {
    position: fixed;
    bottom: 20px;
    right: 80px;

  }

  .badge {
    background-color: red;
  }

  .floating-cart a {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #343a40;
    color: #fff;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    font-size: 20px;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
  }

  .floating-cart a:hover {
    transform: scale(1.1);
  }

  .floating-cart .badge {
    position: absolute;
    top: -10px;
    right: -10px;
  }
</style>

<!--uparrow-->
<button id="scroll-to-top-btn" style="background-color:black" class="btn btn-primary d-none">
  <i class="fas fa-arrow-up"></i>
</button>

</html>

<!-- uparrow code -->
<script>
  const scrollBtn = document.getElementById("scroll-to-top-btn");

  window.addEventListener("scroll", function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollBtn.classList.remove("d-none");
    } else {
      scrollBtn.classList.add("d-none");
    }
  });

  scrollBtn.addEventListener("click", function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });
</script>