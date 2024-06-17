<?php
$serverame = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($serverame, $username, $password, $database);
if (!$conn) {
    echo "<script>alert('Data base not connected')</script>";
} else {
    // if (isset($_POST['login'])) {
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    // setcookie('email', $email, time() + 3600, '/');
    $sql = "select * from signup where email='$email' and password='$pass'";
    // $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    // if (!$result) {
    //     die("Query failed: " . mysqli_error($conn));
    // }

    if (mysqli_num_rows($result) == 1) {
        // session_start();
        $_SESSION['auth'] = 'true';
        $_SESSION['email'] = $email;
        // $stmt->bindParam(':email', $email);
        // $stmt->execute();

        // Cookie expires in 1 hour (3600 seconds)
        echo "<script>window.location.href='../mens.php'</script>";
    } else {
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}
//     else {
//         echo "<script>alert('Invalid username or password')</script>";
//         echo "<script>window.location.href='login.php'</script>";
//     }
// }
