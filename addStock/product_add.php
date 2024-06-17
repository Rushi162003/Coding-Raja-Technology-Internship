<form class="m-5" method="post">
    <label for="text">Title</label><br>
    <input type="text" name="title" value=""><br>

    <label for="text">Description</label><br>
    <textarea name="description"></textarea><br>

    <label for="text">Image</label><br>
    <input type="text" name="image" value=""><br>

    <label for="text">Price</label><br>
    <input type="text" name="price"><br>

    <label for="text">Rate</label><br>
    <input type="text" name="rating"><br>

    <label for="text">product</label><br>
    <input type="text" name="product"><br>

    <button name="addToCart" class="btn btn-outline-success" type="submit">Add to Cart</button>
</form>
<?php
// $id = $_GET['id'];
$serverame = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($serverame, $username, $password, $database);
if (isset($_POST['addToCart'])) {
    $id = $_GET['id'];
    $product = $_POST['product'];
    $sql = "UPDATE mens_data SET product = '$product' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>window.location.href='add_update.php'</script>";
        // header('add_update.php');
    } else {
        echo "<script>alert('product not update')</script>";
    }
}
?>