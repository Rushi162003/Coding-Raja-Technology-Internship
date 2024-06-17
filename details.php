<?php
session_start();
if (!$_SESSION['auth']) {
    // header('location: ./-My-Library-\index.php');
    echo "<script>window.location.href='./login/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
    <title>Shopping</title>
</head>

<body>
    <?php
    include './profile/navbar.php'
    ?>
    <section>
        <div class="container details">
            <form method="post">

                <div class="leftcol ">
                    <?php
                    // error_reporting(0);

                    $serverame = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "e-commerce";
                    $conn = new mysqli($serverame, $username, $password, $database);
                    $email = $_SESSION['email'];
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM products WHERE id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($result)) {
                        $title = $data['title'];
                        $desc = $data['description'];
                        $image = $data['image'];
                        $price = $data['price'];
                        $rate = $data['rating'];
                        $category = $data['catagory'];
                    }
                    if (isset($_POST['addToCart'])) {
                        $id = $data['cart_id'];
                        $title1 = $_POST['title1'];
                        $description1 = $_POST['description1'];
                        $image1 = $_POST['image1'];
                        $price1 = $_POST['price1'];
                        $rate1 = $_POST['rating1'];
                        $category1 =  $_POST['category1'];
                        $sql1 = "INSERT INTO `cart_data`(`title`, `description`, `image`, `price`, `rate`, `category`, `email`) 
                                VALUES ('$title1','$description1','$image1','$price1','$rate1','$category1','$email')";
                        $result1 = mysqli_query($conn, $sql1);
                        if ($result1) {
                            echo "<script>alert('Item has added in the cart')</script>";
                            echo "<script>window.location.href='cart.php'</script>";
                        } else {
                            echo "<script>alert('Failed to add item to cart')</script>";
                        }
                    }
                    ?>
                    <div class="img-col">
                        <img name="image" src="<?php echo $image ?>" alt="">
                        <input hidden name="image1" value="<?php echo $image ?>">
                        <input type="text" hidden name="category1" value="<?php echo $category ?>" id="">
                    </div>
                    <div class="details-col">
                        <p name="title" class="title"><?php echo $title ?></p>
                        <input hidden type="text" name="title1" value="<?php echo $title ?>" class="title">
                        <p class="desc" name="description"><?php echo $desc ?></p>
                        <input type="text" hidden value="<?php echo $desc ?>" class="desc" name="description1">

                        <ul class="rating">
                            <li><span name="rating"><?php echo $rate ?></span> ⭐⭐⭐⭐</li>
                            <input hidden type="text" value="<?php echo $rate ?>" name="rating1">
                            <li><a href="#"> 2000 ratings</a></li>
                            <li><span style="color: gray;"> |</span></li>
                            <li><a href="#"> Search this page</a></li>
                        </ul>
                        <hr>
                        <div class="rate">
                            <span class="offer">Limited time deal</span>
                            <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup><span name="price" class="price"><?php echo $price ?></span>
                                <input hidden type="text" value="<?php echo $price ?>" name="price1" class="price1">
                            </div>
                            <span class="fackmrp">M.R.P.: <strike name="mrp">2099</strike></span>
                            <p class="tax">Inclusive of all taxes</p>
                        </div>
                        <hr>
                        <div class="buy">
                            <select style="width: 100px;" class="form-select" aria-label="Default select example">
                                <option selected>Qty: 1</option>
                                <option value="1">Qty: 2</option>
                                <option value="2">Qty: 3</option>
                                <option value="3">Qty: 4</option>
                            </select>
                            <a class="location" href="#"><img src="./images/location-plus-regular-24.png" alt="">
                                <span style="color:black;">delivering to Mumbai 400001</span><br>
                                <b>Update location</b>
                            </a><br>
                            <button type="submit" name="addToCart" class="cart">Add to cart</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>