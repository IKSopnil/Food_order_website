<?php include "navbar.php"

?>


<?php 
session_start();

if(isset($_POST["add_to_cart"])){

if(isset($_SESSION["cart"])){
  $session_array_id= array_column($_SESSION["cart"], 'id');

  if(!in_array($_GET['id'],$session_array_id)){

    $session_array = array(
      'id'=> $_GET['id'],
      'image'=> $_POST['image'],
      'title'=> $_POST['title'],
      'price'=> $_POST['price'],
  
    );

  }

}
else{

  $session_array = array(
    'id'=> $_GET['id'],
    'image'=> $_POST['image'],
    'title'=> $_POST['title'],
    'price'=> $_POST['price'],

  );

  $_SESSION['cart'][]=$session_array;
}

}


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
     
      <div class="row cart-items">
        <div class="col d-flex justify-content-start mx-lg-5 my-lg-5">
          <img src="<?php echo $cart_item['image'] ?>" height="50" width="50" alt="Item 1" class="cart-item-img">
          <div class="mx-4">
            <h3 class=""><?php echo $cart_item['title'] ?></h3>
          </div>
        </div>
        <div class="col d-flex justify-content-end mx-lg-5 my-lg-5">
          <div class="">
            <label for="item1-quantity">Quantity:</label>
            <input type="number" id="item1-quantity" name="item1-quantity" min="1" max="10" value="1" data-price="0">
          </div>
          <div class="">
            <p class="mx-1">  ৳ <?php echo $cart_item['price'] ?></p>
          </div>
          <div class="mx-4">
            <button class="btn btn-danger btn-sm remove-item-btn">Remove</button>
          </div>
        </div>
      </div>
      <div class="cart-total my-4">
        <h4 class="cart-total-title mb-3">Total: ৳ 0</h4>
        <button class="btn  btn-outline-success mb-3">Confirm Order</button>
      </div>
    </div>

    <script>
      // Get the quantity input elements and the total price element
      const quantityInputs = document.querySelectorAll('input[type="number"]');
      const totalPriceElement = document.querySelector('.cart-total-title');

      // Loop through the quantity input elements and add an event listener to each one
      quantityInputs.forEach(input => {
        input.addEventListener('input', () => {
          // Get the price of the item
          const price = parseFloat(input.dataset.price);

          // Calculate the new total price
          let totalPrice = 0;
          quantityInputs.forEach(input => {
            totalPrice += parseFloat(input.value) * parseFloat(input.dataset.price);
          });

          // Update the total price element with the new total price
          totalPriceElement.textContent = 'Total: ৳ ' + totalPrice.toFixed(2);
        });
      });
    </script>

  </div>
</section>

<?php include "footer.php" ?>