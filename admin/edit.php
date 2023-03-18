<?php
include "db_connect.php";
if (isset($_GET['id']) && isset($_GET['category'])) {
    $id = $_GET['id'];
    $category = $_GET['category'];

    switch ($category) {
        case'all':
            $sql="SELECT * FROM appetizers 
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

               
<?php
    } else {
        echo "No results found";
    }
}
?>
