
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>E-Commerce</title>
</head>

<body>
    <?php
    $serverame = "localhost";
    $username = "root";
    $password = "";
    $database = "e-commerce";
    $conn = new mysqli($serverame, $username, $password, $database);
    // $email = $_SESSION['email'];
    // $id = $_GET['id'];
    // $sql = "SELECT * FROM mens_data WHERE id = '$id'";
    // $result = mysqli_query($conn, $sql);
    // while ($data = mysqli_fetch_array($result)) {

    //     $title = $data['title'];
    //     $desc = $data['description'];
    //     $image = $data['image'];
    //     $price = $data['price'];
    //     $rate = $data['rate'];
    // }
    if (isset($_POST['addToCart'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $rate = $_POST['rating'];
        $sql1 = "INSERT INTO `cart`(`title`, `description`, `image`, `price`, `rate`, `email`) 
        VALUES ('$title','$description','$image','$price','$rate','$email')";
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            echo "<script>alert('Item has been added to the cart')</script>";
            echo "<script>window.location.href = 'cart.php'</script>";
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        }
    }
    ?>

    <!-- <form class="m-5" method="post">
        <label for="text">Title</label><br>
        <p name="title"><?php echo $title; ?></p><br>

        <label for="text">Description</label><br>
        <p name="description"><?php echo $desc; ?></p><br>

        <label for="text">Image</label><br>
        <p name="image"><?php echo $image; ?></p><br>

        <label for="text">Price</label><br>
        <p name="price"><?php echo $price; ?></p><br>

        <label for="text">Rate</label><br>
        <p name="rate"><?php echo $rate; ?></p><br>

        <label for="text">Email</label><br>
        <p name="email"><?php echo $email; ?></p><br>

        <button name="addToCart" value="<?php echo $title; ?>" class="btn btn-outline-success" type="submit">Add to Cart</button>
    </form> -->
    <form class="m-5" method="post">
        <label for="text">Title</label><br>
        <input type="text" name="title" value=""  ><br>

        <label for="text">Description</label><br>
        <textarea name="description"></textarea><br>

        <label for="text">Image</label><br>
        <input type="text" name="image" value=""  ><br>

        <label for="text">Price</label><br>
        <input type="text" name="price"   ><br>

        <label for="text">Rate</label><br>
        <input type="text" name="rating"  ><br>

        <label for="text">Email</label><br>
        <input type="email" name="email"  ><br>

        <button name="addToCart" class="btn btn-outline-success" type="submit">Add to Cart</button>
    </form>

    <script src="script.js"></script>
</body>

</html>