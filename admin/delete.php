<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<?php
include "db_connect.php";

// Get the id and category from the POST request
$id = $_POST['id'];
$category = $_POST['category'];

// Construct the delete query based on the category
if ($category === "all") {
    $sql = "DELETE FROM appetizers WHERE id = $id;
            DELETE FROM main_courses WHERE id = $id;
            DELETE FROM desserts WHERE id = $id;
            DELETE FROM beverages WHERE id = $id;
            DELETE FROM offer WHERE id = $id;";
} elseif ($category === "appetizer") {
    $sql = "DELETE FROM appetizers WHERE id = $id";
} elseif ($category === "maincourse") {
    $sql = "DELETE FROM main_courses WHERE id = $id";
} elseif ($category === "dessert") {
    $sql = "DELETE FROM desserts WHERE id = $id";
} elseif ($category === "beverage") {
    $sql = "DELETE FROM beverages WHERE id = $id";
}  elseif ($category === "top_rated") {
    $sql = "DELETE FROM top_rated WHERE id = $id";
}elseif ($category === "offer") {
    $sql = "DELETE FROM offer WHERE id = $id";
}

// Execute the delete query
if ($conn->multi_query($sql) === TRUE) {
    echo "Row deleted successfully";
} else {
    echo "Error deleting row: " . $conn->error;
}
?>

