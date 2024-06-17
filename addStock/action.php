<?php
$serverame = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($serverame, $username, $password, $database);
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $cat = $_POST['catagory'];
    $product = $_POST['product'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $rate = $_POST['rating'];
    $color = $_POST['color'];
    $brand = $_POST['brand'];
    $qty = $_POST['quantity'];
    $sql = "INSERT INTO products(title,description,catagory,product,image,price,rating,color,brand,quantity)
    VALUE('$title','$desc','$cat','$product','$image','$price','$rate','$color','$brand','$qty')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('ok')</script>";
        echo "<script>window.location.href = 'add_stock.php'</script>";
    } else {
        echo "<script>alert('Database is not connected')</script>";
    }
}
