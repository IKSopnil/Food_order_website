<?php
session_start();

if(!isset($_SESSION['username'])) {
  // User is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>

<?php include "panelnavbar.php" ?>
<?php include "db_connect.php" ?>

<head>

    <!-- Bootstrap CSS library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Bootstrap JS library -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inputState'])) {
    // Get form data
    $category = $_POST['inputState'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $discount = $_POST['discount'];
    $uploadDir = 'img_upload/';

    if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
        // handle file upload
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {


            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if ($category === "appetizer") {
                $sql = "INSERT INTO `appetizers`(`image`, `title`, `description`, `price`) VALUES ('$uploadFile','$title','$description','$price')";
            } elseif ($category === "maincourse") {
                $sql = "INSERT INTO `main_courses`(`image`, `title`, `description`, `price`) VALUES ('$uploadFile','$title','$description','$price')";
            } elseif ($category === "dessert") {
                $sql = "INSERT INTO `desserts`(`image`, `title`, `description`, `price`) VALUES ('$uploadFile','$title','$description','$price')";
            } elseif ($category === "beverage") {
                $sql = "INSERT INTO `beverages`(`image`, `title`, `description`, `price`) VALUES ('$uploadFile','$title','$description','$price')";
            } elseif ($category === "offer") {
                $sql = "INSERT INTO `offer`(`image`, `title`, `description`, `price`,`off_percentage`) VALUES ('$uploadFile','$title','$description','$price','$discount')";
            }
            // Insert data into database
            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success" role="alert">
        Your post has been successfully posted!
    </div>';
                echo '<meta http-equiv="refresh" content="1;url=addpost.php">';
                exit();
            } else {
                echo '<div class="alert alert-danger" role="alert">
                  Error inserting data: ' . $conn->error . '
                </div>';
            }
        } else {
        }
    } elseif (isset($_POST['image_url']) && $_POST['image_url'] != '') {
        // handle image URL
        $image_url = $_POST['image_url'];
        // code to download image from URL and save it to $uploadDir
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if ($category === "appetizer") {
            $sql = "INSERT INTO `appetizers`(`image`, `title`, `description`, `price`) VALUES ('$image_url','$title','$description','$price')";
        } elseif ($category === "maincourse") {
            $sql = "INSERT INTO `main_courses`(`image`, `title`, `description`, `price`) VALUES ('$image_url','$title','$description','$price')";
        } elseif ($category === "dessert") {
            $sql = "INSERT INTO `desserts`(`image`, `title`, `description`, `price`) VALUES ('$image_url','$title','$description','$price')";
        } elseif ($category === "beverage") {
            $sql = "INSERT INTO `beverages`(`image`, `title`, `description`, `price`) VALUES ('$image_url','$title','$description','$price')";
        } elseif ($category === "offer") {
            $sql = "INSERT INTO `offer`(`image`, `title`, `description`, `price`,`off_percentage`) VALUES ('$image_url','$title','$description','$price','$discount')";
        }
        // Insert data into database
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">
     Your post has been successfully posted!
 </div>';
            echo '<meta http-equiv="refresh" content="1;url=addpost.php">';
            exit();
        } else {
            echo '<div class="alert alert-danger" role="alert">
               Error inserting data: ' . $conn->error . '
             </div>';
        }
    } else {
        // no image provided
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center my-5">Create a New Post</h1>
            <form method="post" enctype="multipart/form-data" onsubmit="return checkForm()">
                <div class="form-group">
                    <label for="inputState">
                        <h6>Select Category:</h6>
                    </label>
                    <select id="inputState" name="inputState" class="form-control">
                        <option value="appetizer" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'appetizer') echo 'selected'; ?>>Appetizer</option>
                        <option value="maincourse" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'maincourse') echo 'selected'; ?>>Main Course</option>
                        <option value="dessert" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'dessert') echo 'selected'; ?>>Dessert</option>
                        <option value="beverage" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'beverage') echo 'selected'; ?>>Beverage</option>
                        <option value="offer" id="offer" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'offer') echo 'selected'; ?>>Offer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title:<span class="require"></span></label>
                    <input required type="text" class="form-control" name="title" placeholder="write a title name..." />
                </div>
                <div class="form-group">
                    <label for="price">Price:<span class=""></span></label>
                    <input type="number" required placeholder="৳ ৳" class="form-control" name="price" />
                </div>
                <div class="form-group" id="discount_percentage">
                    <label for="discount">Discount percentage (only for offer):<span class=""></span></label>
                    <input type="number" required placeholder="offer percentage %" class="form-control" name="discount" />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea required rows="5" placeholder="describe the item in one sentence..." class="form-control" name="description"></textarea>
                </div>
                <div id="footer-left">
                    <label for="file_choose">Upload Image:</label><br>
                    <input type="file" name="file" id="file" class="inputfile" accept='' onchange="fileChange(this)" />
                    <label for="file"><i class="fas fa-paperclip"></i></label>
                </div>
                <div id="paste-img">
                    <label for="image_url">Or Paste Image URL:</label><br>
                    <input type="text" name="image_url" id="image_url" />
                </div>

                <script>
                    function checkForm() {
                        var fileInput = document.getElementById("file");
                        var urlInput = document.getElementById("image_url");
                        if (fileInput.value == "" && urlInput.value == "") {
                            alert("Please upload an image or paste an image URL.");
                            return false;
                        }
                        return true;
                    }
                </script>
                <div class="form-group my-4 ">
                    <button type="submit" value="submit" class="btn btn-success mx-4 px-4">Create</button>
                    <button type="reset" class="btn btn-danger px-4">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>