<section class="Top_Rated  justify-content-center align-items-center">

    <?php 


    $sql = "SELECT * FROM top_rated";


    $result = $conn->query($sql);

    ?>
    <div class="text-center">
      <h2 class="mt-5">Top Rated Dishes</h2>
      <p class="my-5">These top 10 items are ranked based on how much people like them.</p>
    </div>

    <div class="top_rated d-flex justify-content-center align-items-center">
      <div class="apitizer_card text-center   my-4">
        <div class="apitizer_card text-center ">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner row align-items-center">
              <?php
              $count = 0;
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  if ($count % 4 == 0) {
                    echo '<div class="carousel-item active' . ($count == 0 ? ' active' : '') . '"><div class="row row-cols-md-4 row-cols-1">';
                  }
              ?>
                  <div class="col d-flex justify-content-center align-item-center mb-4">
                    <div class=" card h-100 text-center">
                      <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                      </div>
                      <div class="card-footer">
                        <p style="font-weight:bold" class="justify-content-cente"><?php echo $row['price'] ?> Taka ( &#2547; )</p>
                        <a href="#" class="btn btn-outline-dark d-flex justify-content-center">Add to Cart</a>
                      </div>
                    </div>
                  </div>
              <?php
                  $count++;
                  if ($count % 4 == 0) {
                    echo '</div></div>';
                  }
                }
                if ($count % 4 != 0) {
                  echo '</div></div>';
                }
              }
              ?>
            </div>
            <?php if ($result->num_rows > 4) { ?>
              <button style="margin: 150px;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button style="margin: 150px;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            <?php } ?>
          </div>
        </div>



      </div>
  </section>