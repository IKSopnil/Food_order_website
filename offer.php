<head >
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--icon font awesomr-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<?php include "db_connect.php";


$sql = "SELECT * FROM offer";


$result = $conn->query($sql);

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
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);

    }

    .card:hover {
        transform: scale(1.006, 1.006);
        transition: .5s;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
       

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

                            <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                <p class="card-text"><?php echo $row['description'] ?></p>
                            </div>
                            <div class="card-footer">
                                <p class="fas fa-tags text-start mx-auto d-flex justify-content-end "><i class="mx-1"></i><?php echo $row['off_percentage'] ?> <span class="mx-1"> % OFF</span></p>
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
    

</section>
<section>


</section>
<?php include "footer.php" ?>

