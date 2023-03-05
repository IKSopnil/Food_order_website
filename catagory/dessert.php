<?php include "db_connect.php";


$sql = "SELECT * FROM desserts";


$result = $conn->query($sql);

?>
<style>
.card img {
            width: 100%!important;
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
  </style>

<div class="carousel-item mb-4" id="Desserts">
  <div class="text-center">
    <h3>Desserts</h3>
    <p>This category includes sweet dishes, such as cakes, pies, cookies, and other confections.</p>

  </div>
  <div class="desert_card justify-content-center align-items-center">
    <div class="row container d-flex justify-content-center align-item-center row-cols-1 row-cols-md-3 g-4">
    <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class=" col-lg-4 d-flex justify-content-center align-item-center ">
                        <div class="card h-100 text-center ">

                            <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                <p class="card-text"><?php echo $row['description'] ?></p>
                            </div>
                            <div class="card-footer">
                                
                                <p style="font-weight:bold" class=" justify-content-cente"><?php echo $row['price'] ?> Taka ( &#2547; )</p>
                                <a href="#" class="btn btn-outline-dark   d-flex justify-content-center ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
      
    </div>
    
  </div>
</div>