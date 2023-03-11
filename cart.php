<?php include "navbar.php"

?>


<?php 
session_start();




?>

<head>



  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style>
  #cart {
    background-color: #eee;
  }

  #cart_c {
    height: 20vh;
    background-color: #fff;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;

  }

  .cart {
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);

  }
</style>
<section class="pb-4   " id="cart">

  <div class=" text-center   mx-auto">
    <div class=" container text-center my-4 justify-content-center mt-0 pt-5 " id="cart_c">
      <h3>Your Cart</h3>

      <p>Choose and order your items.</p>
    </div>
    <div class="container cart ">
      <h2 class="cart-header py-4">Your Order</h2>


      
      <?php 

$total_price = 0;

if(!empty($_SESSION['cart'])){

  foreach ($_SESSION['cart'] as $key => $value){

    $total_price += $value['price'];
    ?>
    <div class="row cart-items">
      <div class="col d-flex justify-content-start mx-lg-5 my-lg-5">
        <img src="<?php echo $value['image'] ?>" height="50" width="50" alt="Item 1" class="cart-item-img">
        <div class="mx-4">
          <h3 class=""><?php echo $value['title'] ?></h3>
        </div>
      </div>
      <div class="col d-flex justify-content-end mx-lg-5 my-lg-5">
        <div class="">
          <label for="<?php echo $key ?>-quantity">Quantity:</label>
          <input type="number" id="<?php echo $key ?>-quantity" name="<?php echo $key ?>-quantity" min="1" max="10" value="1" data-price="<?php echo $value['price'] ?>">
        </div>
        <div class="">
          <p class="mx-1">  ৳ <?php echo $value['price'] ?></p>
        </div>
        <div class="mx-4">
        <form method="post" action="remove_item.php">
            <input type="hidden" name="key" value="<?php echo $key ?>">
            <button type="submit" class="btn btn-danger btn-sm remove-item-btn">Remove</button>
          </form>
        </div>
      </div>
    </div>
    <?php 
  }
}
else{
  echo "<p>Your cart is empty.</p>";
}

?>
<div class="cart-total my-4">
  <h4 class="cart-total-title mb-3">Total: <span id="cart-total-price">৳ <?php echo $total_price ?></span></h4>
  <button class="btn btn-outline-success mb-3">Confirm Order</button>
</div>
<script>
  
  const quantityInputs = document.querySelectorAll('input[type="number"]');

  
  quantityInputs.forEach(input => {
    input.addEventListener('change', () => {
      let newTotalPrice = 0;
      
      quantityInputs.forEach(input => {
        const quantity = input.value;
        const price = input.dataset.price;
        const totalItemPrice = quantity * price;
        newTotalPrice += totalItemPrice;
      });
      
      const cartTotalPrice = document.getElementById('cart-total-price');
      cartTotalPrice.textContent = `৳ ${newTotalPrice}`;
    });
  });
</script>


  

  </div>
</section>


<?php include "footer.php" ?>