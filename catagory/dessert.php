<?php include "db_connect.php";


$sql = "SELECT * FROM desserts";


$result = $conn->query($sql);

$sql = "SELECT * FROM desserts";


$result = $conn->query($sql);







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


<style>
    .card img {
        width: 100% !important;
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

<div class="carousel-item mb-4" id="Dessert">
    <div class="text-center">
    <h3>Desserts</h3>
<p>This category includes a variety of sweet dishes served after a meal, such as cakes, pies, ice cream, and fruit salads.</p>

    </div>
    <div class="dessert" id="initiated_dessert">
        <div class="row container d-flex justify-content-center align-item-center row-cols-1 row-cols-md-3 g-4">


            <?php
            
            $items_per_page = 12;
            $total_pages = ceil($result->num_rows / $items_per_page);
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $items_per_page;
            $sql = "SELECT * FROM desserts LIMIT $items_per_page OFFSET $offset";
            $result = $conn->query($sql);


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
                                <form action="index.php?id=<?= $row['id'] ?>" method="post">
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

        <?php
        echo '<div class="pagination3 my-5 justify-content-center" id="pagination3">';
        for ($i = 1; $i <= $total_pages; $i++) {
            $active = ($i == intval($current_page) || (!$current_page && $i == 1)) ? 'active' : '';
            echo '<a href="?page=' . $i . '" class="mx-3 ' . $active . '">' . $i . '</a>';
        }
        echo '</div>';


        ?>

        
        <script>
            function ajaxPaging() {
                $('.pagination3 a').on('click', function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $('#initiated_dessert').load(url + ' div#initiated_dessert', null, function() {
                        // Scroll to the top of the section
                        $('html, body').animate({
                            scrollTop: $('#initiated_dessert').offset().top
                        }, 500);
                        ajaxPaging();
                    });
                });
            }
            ajaxPaging();
        </script>
        

<style>
.pagination3 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}

.pagination3 a {
    color: #333;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 4px;
    border: 1px solid #ddd;
    transition: background-color 0.3s;
    margin-right: 5px;
}

.pagination3 a.active,
.pagination3 a:hover {
    background-color: #ddd;
}
</style>

    </div>
</div>