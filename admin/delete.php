<?php
require('db_connect.php');

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    if (isset($_POST['inputState'])) {

        // Get the selected value from the dropdown
        $selectedValue = mysqli_real_escape_string($conn, $_POST['inputState']);

        // Define the SQL query based on the selected value
        if ($selectedValue === "all") {
            $sql = "DELETE FROM appetizers WHERE id=$id;
                    DELETE FROM main_courses WHERE id=$id;
                    DELETE FROM desserts WHERE id=$id;
                    DELETE FROM beverages WHERE id=$id;
                    DELETE FROM offer WHERE id=$id;";
        } elseif ($selectedValue === "appetizer") {
            $sql = "DELETE FROM appetizers WHERE id=$id";
        } elseif ($selectedValue === "maincourse") {
            $sql = "DELETE FROM main_courses WHERE id=$id";
        } elseif ($selectedValue === "dessert") {
            $sql = "DELETE FROM desserts WHERE id=$id";
        } elseif ($selectedValue === "beverage") {
            $sql = "DELETE FROM beverages WHERE id=$id";
        } elseif ($selectedValue === "offer") {
            $sql = "DELETE FROM offer WHERE id=$id";
        }

        $result = mysqli_query($conn,$sql);

        if (!$result) {
            die("Error executing query: " . mysqli_error($conn));
        }

        header("Location: post_category.php");
        exit();
    }
} else {
    die("ID not found.");
}
?>
