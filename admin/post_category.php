<?php include "db_connect.php";


?>

<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto ">
                    <button class="btn btn-secondary mx-4" type="button">
                        Dashboard
                    </button>
                    <li class="nav-item mx-4">
                        <a href="user.php"><button class="btn btn-secondary " type="button">
                                User
                            </button></a>
                    </li>
                    <li class="nav-item mx-4">

                        <a href="post_category.php">
                            <button class="btn btn-secondary " type="button">
                                All Post
                            </button>
                        </a>


                    </li>
                    <a href="order.php"><button class="btn btn-secondary mx-4" type="button">
                            Order
                        </button></a>
                </ul>
            </div>
        </div>
    </nav>
</section>
<section>
    <div class="container my-5">
        <!-- Example single danger button -->
        <div class="form-outline">
            <form method="POST" action="">
                <div class="form-outline">
                    <label for="">Filter:</label>
                    <select id="inputState" name="inputState" class="form-control my-2 text-center justify-content-center w-50">
                        <option value="all" >All Post</option>
                        <option value="appetizer" selected>Appetizer</option>
                        <option value="maincourse">Main Course</option>
                        <option value="dessert">Dessert</option>
                        <option value="beverage">Beverage</option>
                        <option value="offer">Offer</option>
                    </select>
                </div>
                <small>(Press submit after selecting option.)<br></small>
                <button type="submit" class="btn btn-success my-2">Submit</button>
            </form>



        </div>
        <div>
            <div class="container">
                <h2 class="my-5">Post Management</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (isset($_POST['inputState'])) {

                            // Get the selected value from the dropdown
                            $selectedValue = $_POST['inputState'];

                            // Define the SQL query based on the selected value
                            if ($selectedValue === "all") {
                                $sql = "SELECT * FROM appetizers
            union SELECT * FROM main_courses
            union SELECT * FROM desserts
            union SELECT * FROM beverages
            union SELECT * FROM offer
            ";
                            } elseif ($selectedValue === "appetizer") {
                                $sql = "SELECT * FROM appetizers";
                            } elseif ($selectedValue === "maincourse") {
                                $sql = "SELECT * FROM main_courses";
                            } elseif ($selectedValue === "dessert") {
                                $sql = "SELECT * FROM desserts";
                            } elseif ($selectedValue === "beverage") {
                                $sql = "SELECT * FROM beverages";
                            } elseif ($selectedValue === "offer") {
                                $sql = "SELECT * FROM offer";
                            }
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                                $num = 0;
                                while ($row = $result->fetch_assoc()) {


                        ?>
                                    <tr class="">
                                        <td><?php echo ++$num ?></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><img src="<?php echo $row['image'] ?>" alt="Product 1" style="max-width: 100px;"></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                        <?php
                                }
                            }
                        } ?>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>