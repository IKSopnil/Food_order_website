<?php include "navbar.php" ?>

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
    <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center align-item-center">
      <div class="cart">
        <h2 class="cart-header">Your Order</h2>
        <div class="cart-items">
          <div class="cart-item">
            <img src="item1.jpg" alt="Item 1" class="cart-item-img">
            <div class="cart-item-details">
              <h3 class="cart-item-title">Item 1</h3>
              <p class="cart-item-price">$10.99</p>
              <div class="cart-item-quantity">
                <label for="item1-quantity">Quantity:</label>
                <input type="number" id="item1-quantity" name="item1-quantity" min="1" max="10" value="1">
              </div>
              <button class="btn btn-danger btn-sm remove-item-btn">Remove</button>
            </div>
          </div>
          <div class="cart-item">
            <img src="item2.jpg" alt="Item 2" class="cart-item-img">
            <div class="cart-item-details">
              <h3 class="cart-item-title">Item 2</h3>
              <p class="cart-item-price">$8.99</p>
              <div class="cart-item-quantity">
                <label for="item2-quantity">Quantity:</label>
                <input type="number" id="item2-quantity" name="item2-quantity" min="1" max="10" value="1">
              </div>
              <button class="btn btn-danger btn-sm remove-item-btn">Remove</button>
            </div>
          </div>
        </div>
        <div class="cart-total">
          <h4 class="cart-total-title">Total: $19.98</h4>
          <button class="btn btn-primary checkout-btn">Confirm Order</button>
        </div>
      </div>


    </div>
  </div>
</section>

<?php include "footer.php" ?>