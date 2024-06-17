<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php

$serverame = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($serverame, $username, $password, $database);
$id = $_GET['cartId'];
$sql = "DELETE FROM cart_data WHERE cart_id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    // echo "<script> Swal.fire({
    //     position: 'top-end',
    //     icon: 'success',
    //     title: 'Item has been deleted from cart',
    //     showConfirmButton: false,
    //     timer: 1500
    //     });</script>";
    echo "<script>alert('item has been deleted')</script>";
    echo "<script>window.location.href = 'cart.php'</script>";
}
