<?php
$servername = "sql112.epizy.com";
$username = "epiz_34125306";
$password = "lzfjT3kfljD";
$dbname = "epiz_34125306_ki_khaba";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
