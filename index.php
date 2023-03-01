<?php
include "database_connect.php";
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
        <a href="" class="button ">Order Now</a>
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
      <ul>
        <li><a href="#Appetizers" type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Appetizers</a></li>
        <li><a href="#Main Courses" type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2">Main Courses</a></li>
        <li><a href="#Desserts" type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3">Desserts</a></li>
        <li><a href="#Beverages" type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4">Beverages</a></li>

      </ul>
      <p style="margin-top:1%";>Select your desired category.</p>
      
    </div>
    

  </section>
  <!--slide-->
  <section class="d-flex justify-content-center align-items-center">

  <div  id="carouselExample" class="carousel slide">
  
  <div class="carousel-inner ">
    
    <?php include 'catagory/appetizer.php'; ?>

   
    <?php include 'catagory/main_course.php'; ?>

  
    <?php include 'catagory/dessert.php'; ?>

    
   
    <?php include 'catagory/beverage.php'; ?>

    
  </div>
  
</div>
  </section>



  er por nearby resturant er map takbe with some text
</body>

<section class="">
  <?php include 'footer.php'; ?>

</section>
<button id="scroll-to-top-btn" style="background-color:black" class="btn btn-primary d-none">
  <i class="fas fa-arrow-up"></i>
</button>

</html>
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