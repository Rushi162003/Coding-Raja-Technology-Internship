<?php
$servename = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($servename, $username, $password, $database);

$state = $_GET['state']; // Get the selected state from the AJAX request

// Fetch cities from the database based on the selected state
$sql = "SELECT city FROM cities WHERE state = '$state'";
$result = $conn->query($sql);

$cities = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cities[] = $row['city'];
    }
}

echo json_encode($cities);
