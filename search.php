<?php include "db_connect.php" ?>
<?php include "navbar.php" ?>

<head>
     <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


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
    .srch {
	display: flex;
	justify-content: center;
	align-items: center;
  }
  
  .srch input[type="text"] {
	padding: 8px;
	font-size: 18px;
	border-radius: 4px;
	border: 1px solid #ccc;
	width: 300px;
	max-width: 100%;
	margin-right: -1px;
	margin-top: -1px;
  }
  
  .srch button[type="submit"] {
	background-color: #ff0033;
	color: white;
	
	border-radius: 5px;
	font-size: 18px;
	cursor: pointer;
	padding: 8px 16px;
	transition: all 0.3s ease;
  }
  
  .srch button[type="submit"]:hover {
	background-color: #ffffff;
	color: rgb(0, 0, 0);
	box-shadow: 2px 2px 15px #fff
  }
  

  

    </style>
    <section class="container justify-content-center align-items-center my-3">


    <div class="mb-5">
    <div class="text-center m-4 justify-content-center  pt-5 " id="offer_c">
            <h3>Search Results</h3> </h3>
            <p>Search the best deals and special offers</p>
        </div>

        <form method="post" action="search.php" class="srch text-center my-5" >
        <input type="text" name="search" id="search" placeholder="Search for foods">
        <button type="submit" name="submit" class="btn  mx-2">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>

        
        <?php
        if (isset($_POST['submit'])) {
            // Get search query from form submission
            $search = $_POST['search'];




            // Build SQL query using search query
            $sql = "SELECT * FROM desserts WHERE title LIKE '%$search%'
        UNION
        SELECT * FROM appetizers WHERE title LIKE '%$search%'
        UNION
        SELECT * FROM beverages WHERE title LIKE '%$search%'
        UNION
        SELECT * FROM offer WHERE title LIKE '%$search%'
        UNION
        SELECT * FROM main_courses WHERE title LIKE '%$search%' ";



            // Execute query and display results
            $result = $conn->query($sql);
        ?>

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
                } else {
                    echo "<p>No results found.</p>";
                }

                $conn->close();
            }
            ?>
            </div>
    </section>


<section class=""style >
<?php include "footer.php" ?>
</section>
