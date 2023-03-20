<head>
  <!--boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!--icon font awesomr-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<?php include "db_connect.php";
session_start();

$sql = "SELECT * FROM offer";


$result = $conn->query($sql);

if (isset($_POST["add_to_cart"])) {

  if (isset($_SESSION["cart"])) {

    $session_array_id = array_column($_SESSION["cart"], 'id');

    if (!in_array($_GET['id'], $session_array_id)) {

      $session_array = array(
        'id' => $_GET['id'],
        'image' => $_POST['image'],
        'title' => $_POST['title'],
        'price' => $_POST['price'],

      );

      $_SESSION['cart'][] = $session_array;
    }
  } else {

    $session_array = array(
      'id' => $_GET['id'],
      'image' => $_POST['image'],
      'title' => $_POST['title'],
      'price' => $_POST['price'],

    );

    $_SESSION['cart'][] = $session_array;
  }
}
// Get the number of items in the cart

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
$num_items_in_cart = count($_SESSION['cart']);


?>
<?php include "navbar.php" ?>

<style>
  .card img {
    width: 100%;
    height: 250px;
  }

  .card {
    width: 501px;
    height: 300px;
    margin-left: 5%;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

  }

  .card:hover {
    transform: scale(1.006, 1.006);
    transition: .5s;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);


  }


  .offer .row {
    margin-top: 1%;
  }

  #offer {
    background-color: #eee;
  }

  #offer_c {
    height: 20vh;
    background-color: #fff;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;

  }
</style>





<section class="pb-4 d-flex justify-content-center align-item-center " id="offer">

  <div class=" offer text-center   mx-auto">
    <div class="text-center my-4 justify-content-center mt-0 pt-5 " id="offer_c">
      <h3>Offer </h3>
      <p>Find the best deals and special offers</p>
    </div>
    <div class="container row d-flex justify-content-center align-item-center  row-cols-md-3 g-4 ">

      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <div class=" col-lg-4 d-flex justify-content-center align-item-center ">
            <div class="card h-100 text-center ">

            <?php
if (strpos($row['image'], 'http') !== false) {
    // If the image is a URL
    $image_url = $row['image'];
} else {
    // If the image is a file
    $image_url = 'admin/' . $row['image'];
}
?>
<img src="<?php echo $image_url ?>" class="card-img-top" alt="...">

              <div class="card-body">
                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                <p class="card-text"><?php echo $row['description'] ?></p>
              </div>
              <div class="card-footer">
                <p class="fas fa-tags text-start mx-auto d-flex justify-content-end "><i class="mx-1"></i><?php echo $row['off_percentage'] ?> <span class="mx-1"> % OFF</span></p>
                <p style="font-weight:bold" class=" justify-content-cente"><?php echo $row['price'] ?> Taka ( &#2547; )</p>
                <form action="offer.php?id=<?= $row['id'] ?>" method="post">
                  <button name="add_to_cart" class="btn btn-outline-dark justify-content-center w-100" type="submit">Add to Cart</button>
              </div>

              <input type="hidden" name="image" value="<?php echo $row['image'] ?>">
              <input type="hidden" name="title" value="<?php echo $row['title'] ?>">
              <input type="hidden" name="price" value="<?php echo $row['price'] ?>">

              </form>


            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>



  </div>
  <div class="floating-cart">
    <a href="cart.php">
      <i class="fas fa-shopping-cart"></i>
      <span class="badge badge-pill rounded-circle"><?php echo $num_items_in_cart; ?></span>
    </a>
  </div>
  <style>
    .floating-cart {
      position: fixed;
      bottom: 20px;
      right: 20px;

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


</section>
<section>


</section>
<?php include "footer.php" ?>