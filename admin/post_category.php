<?php
session_start();

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<?php include "db_connect.php";


?>

<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<?php include "panelnavbar.php" ?>

<section>
    <div class="container my-5">
        <!-- Example single danger button -->
        <div class="form-outline">
            <form method="POST" action="">
                <div class="form-outline">
                    <label for="">
                        <h6>Select Category:</h6>
                    </label>
                    <select id="inputState" name="inputState" class="form-control my-2 text-center justify-content-center w-50">
                        <option value="all" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'all') echo 'selected'; ?>>All Post</option>
                        <option value="appetizer" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'appetizer') echo 'selected'; ?>>Appetizer</option>
                        <option value="maincourse" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'maincourse') echo 'selected'; ?>>Main Course</option>
                        <option value="dessert" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'dessert') echo 'selected'; ?>>Dessert</option>
                        <option value="beverage" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'beverage') echo 'selected'; ?>>Beverage</option>
                        <option value="offer" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'offer') echo 'selected'; ?>>Offer</option>
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
            ORDER BY title ASC
            ";
                            } elseif ($selectedValue === "appetizer") {
                                $sql = "SELECT * FROM appetizers ORDER BY title ASC";
                            } elseif ($selectedValue === "maincourse") {
                                $sql = "SELECT * FROM main_courses ORDER BY title ASC";
                            } elseif ($selectedValue === "dessert") {
                                $sql = "SELECT * FROM desserts ORDER BY title ASC";
                            } elseif ($selectedValue === "beverage") {
                                $sql = "SELECT * FROM beverages ORDER BY title ASC";
                            } elseif ($selectedValue === "offer") {
                                $sql = "SELECT * FROM offer ORDER BY title ASC";
                            }
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                                $num = 0;
                                while ($row = $result->fetch_assoc()) {


                        ?>
                                    <input type="hidden" name="category" value="<?php echo $selectedValue; ?>">

                                    <tr class="">
                                        <td><?php echo ++$num ?></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><img src="<?php echo $row['image'] ?>" alt="Product 1" style="max-width: 100px;"></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id']; ?>&category=<?php echo $selectedValue; ?>" class="btn btn-primary">Edit</a>

                                            <a href="#" class="btn btn-danger" onclick="deleteRow(<?php echo $row['id']; ?>)">Delete</a>

                                        </td>
                                    </tr>

                        <?php
                                }
                            }
                        } ?>
                        <script>
                            function deleteRow(id) {
                                var category = document.getElementsByName('category')[0].value;
                                if (confirm('Are you sure you want to delete this row?')) {
                                    var xhttp = new XMLHttpRequest();
                                    xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            window.location.reload();
                                        }
                                    };
                                    xhttp.open("POST", "delete.php", true);
                                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    xhttp.send("id=" + id + "&category=" + category);
                                }
                            }
                        </script>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>