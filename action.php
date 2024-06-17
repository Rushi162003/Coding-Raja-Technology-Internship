<?php
$serverame = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($serverame, $username, $password, $database);
if (!$conn) {
    echo "<script>alert('Database not connected')</script>";
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['password'];
    $sql = "insert into signup(name, email, number, password)values('$name','$email','$number','$pass')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        echo "<script>alert('Register successfully')</script>";

        // setcookie("name", "$name", time() + 1000, "/");
        // header("location: \E_commerce\login\login.php");
        // echo "<script>window.location.href('\xampp\htdocs\E_commerce\login\login.php')</script>";
        echo "<script>window.location.href='login/login.php'</script>";
    } else {
        echo "<script>alert('Account not created')</script>";
        echo "<script>window.location.href='signup.php'</script>";
    }
}
