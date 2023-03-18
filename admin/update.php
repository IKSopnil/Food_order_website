<?php
include "db_connect.php";

if (isset($_POST['id']) && isset($_POST['category'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = isset($_POST['discount']) ? $_POST['discount'] : 0;


    $image = $_FILES['image']['name'];
    $target_dir = "img_upload/";
    $target_file = $target_dir . basename($image);

    // Check if file already exists
     
    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Allow certain file formats
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    if (!in_array($file_type, $allowed_types)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        exit;
    }

    // Upload file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "";
        switch ($category) {
            case 'all':
                $sql = "UPDATE appetizers SET 
        title = '$title', 
        description = '$description', 
        price = '$price', 
        image = '$image'
        WHERE id = $id;
        UPDATE main_courses SET 
        title = '$title', 
        description = '$description', 
        price = '$price', 
        image = '$image'
        WHERE id = $id;
        UPDATE desserts SET 
        title = '$title', 
        description = '$description', 
        price = '$price', 
        image = '$image'
        WHERE id = $id;
        UPDATE beverages SET 
        title = '$title', 
        description = '$description', 
        price = '$price', 
        image = '$image'
        WHERE id = $id;
        UPDATE offer SET 
        title = '$title', 
        description = '$description', 
        price = '$price', 
        image = '$image'
        WHERE id = $id;";

if ($conn->multi_query($sql) === TRUE) {
    // success message
    echo '<div class="alert alert-success" role="alert">
            Your post has been successfully updated!
        </div>';
        echo '<meta http-equiv="refresh" content="1;url=post_category.php">';
        exit();
} else {
    // error message
}

                break;
            
            case 'appetizer':
                $sql = "UPDATE appetizers SET title='$title', description='$description', price=$price, image='$target_file' WHERE id=$id";
                break;
            case 'maincourse':
                $sql = "UPDATE main_courses SET title='$title', description='$description', price=$price, image='$target_file' WHERE id=$id";
                break;
            case 'dessert':
                $sql = "UPDATE desserts SET title='$title', description='$description', price=$price, image='$target_file' WHERE id=$id";
                break;
            case 'beverage':
                $sql = "UPDATE beverages SET title='$title', description='$description', price=$price, image='$target_file' WHERE id=$id";
                break;
            case 'offer':
                $sql = "UPDATE offer SET title='$title', description='$description', price=$price, off_percentage=$off_percentage, image='$target_file' WHERE id=$id";
                break;
        }

        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">
            Your post has been successfully updated!
        </div>';
        echo '<meta http-equiv="refresh" content="1;url=post_category.php">';
        exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
