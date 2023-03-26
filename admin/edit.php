<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<?php include 'panelnavbar.php'; ?>
<?php
include "db_connect.php";
if (isset($_GET['id']) && isset($_GET['category'])) {
    $id = $_GET['id'];
    $category = $_GET['category'];

    switch ($category) {
        case 'all':
            $sql = "SELECT * FROM appetizers 
            WHERE id=$id
            UNION ALL
            SELECT * FROM main_courses 
            WHERE id=$id
            UNION ALL
            SELECT * FROM desserts 
            WHERE id=$id
            UNION ALL
            SELECT * FROM beverages 
            WHERE id=$id
            UNION ALL
            SELECT * FROM offer 
            WHERE id=$id
            ";
            break;
        case 'appetizer':
            $sql = "SELECT * FROM appetizers WHERE id=$id";
            break;
        case 'maincourse':
            $sql = "SELECT * FROM main_courses WHERE id=$id";
            break;
        case 'dessert':
            $sql = "SELECT * FROM desserts WHERE id=$id";
            break;
        case 'beverage':
            $sql = "SELECT * FROM beverages WHERE id=$id";
            break;
        case 'offer':
            $sql = "SELECT * FROM offer WHERE id=$id";
            break;
        default:
            echo "Invalid category";
            exit;
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

?>
        <section class="container my-4">
            <h1 class="text-center">Edit Your Post</h1>
            <!-- Display the form to edit the data -->
            <form method="post" action="update.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="category" value="<?php echo $category; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description']; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>">
                </div>
                <div class="form-group">
                    <label for="discount">discount</label>
                    <input type="number" class="form-control" id="discount" name="discount" value="<?php echo $row['off_percentage']; ?>">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <img src="<?php echo $row['image']; ?>" alt="Product Image" style="max-width: 100px;">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </section>
        <style>
            .form-group {
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"],
            input[type="file"] {
                border: 1px solid #ccc;
                border-radius: 4px;
                padding: 10px;
                width: 100%;
                box-sizing: border-box;
            }

            input[type="file"] {
                margin-top: 10px;
            }

            from .btn {
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 10px 20px;
                cursor: pointer;
            }

            .btn:hover {
                background-color: #0069d9;
            }
        </style>

<?php
    } else {
        echo "No results found";
    }
}
?>