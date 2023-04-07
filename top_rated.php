<section class="Top_Rated  justify-content-center align-items-center">

    <?php
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




    $sql = "SELECT * FROM top_rated";


    $result = $conn->query($sql);

    ?>
    <div class="text-center">
        <h2 class="mt-5">Top Rated Dishes</h2>
        <p class="my-5">These top 10 items are ranked based on how much people like them.</p>
    </div>

    <div class="top_rated d-flex justify-content-center align-items-center ">
        <div class="top_rated_card text-center my-4 ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $count = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($count == 0) {
                                echo '<div class="carousel-item active">';
                                echo '<div class="row justify-content-center">';
                            } elseif ($count % 4 == 0) {
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="carousel-item">';
                                echo '<div class="row justify-content-center">';
                            }
                    ?>
                            <div class="col-md-auto col-sm-6 mb-5">
                                <div class="card h-100 text-center mx-2" style="max-width: 380px;">
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
                                        <p class="card-text"><?php echo $row['price'] ?> Taka ( &#2547; )</p>
                                        <form action="index.php?id=<?= $row['id'] ?>" method="post">
                                            <button name="add_to_cart" class="btn btn-outline-dark justify-content-center w-100" type="submit">Add to Cart</button>
                                            <input type="hidden" name="image" value="<?php echo $row['image'] ?>">
                                            <input type="hidden" name="title" value="<?php echo $row['title'] ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $count++;
                        }
                        if ($count % 4 != 0) {
                            // Add empty cards to fill up the row
                            for ($i = 0; $i < 4 - ($count % 4); $i++) {
                                echo '<div class="col-md-3 col-sm-6 mb-5"></div>';
                            }
                            echo '</div></div>';
                        }
                    }
                    ?>
                </div>

                <?php if ($result->num_rows > 4) { ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        <style>
                            .carousel-control-prev-icon,
                            .carousel-control-next-icon {
                                color: white;
                                /* Change the color of the arrow icons */
                                font-size: 30px;
                                /* Increase the size of the arrow icons */
                                background-color: rgba(0, 0, 0, 0.5);
                                /* Add a semi-transparent black background to the arrows */
                                border-radius: 50%;
                                /* Make the arrows circular */
                                padding: 20px;
                                /* Add some padding to the arrows */
                            }

                            .carousel-control-prev-icon:hover,
                            .carousel-control-next-icon:hover {
                                background-color: rgba(0, 0, 0, 0.8);
                                /* Darken the background color on hover */
                            }
                        </style>
                    </button>
                <?php } ?>
            </div>
        </div>
    </div>

</section>