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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        section {
            margin-top: 50px;
            /* background-color: white; */
            margin: 50px 20px 10px 20px;
        }

        .grid {
            /* box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px; */
            display: grid;
            grid-template-columns: 70% 30%;
            gap: 30px;
            margin: 10px;
            padding: 20px;
            overflow: hidden;
        }

        .left-col {
            background-color: white;
            padding: 20px;

        }

        .left-col #prive {
            font-size: 17px;
            color: #565959;
            font-weight: 600;
        }

        .right-col {
            float: right;
            padding: 20px;

            margin-right: 20px;
            background-color: white;
        }

        .grid h1 {
            line-height: 36px;
            font-size: 33px;
        }

        .section {
            display: grid;
            height: 280px;
            grid-template-columns: 30% 70%;
            /* margin-top: 50px; */
        }

        .l-col {
            /* margin-top: 50px; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .l-col img {
            height: 200px;
            width: 250px;
        }

        .r-col {
            position: relative;
            line-height: 20px;

        }

        .r-col .product-details .heading {
            font-size: 24px;
            line-height: 30px;
            width: 600px;
            color: black;
            font-weight: 500;
        }

        .price {
            /* position: absolute; */
            margin-top: -270px;
            /* margin-left: 570px; */
        }

        .price h3 {
            font-size: 24px;
            font-weight: 600;
        }

        ul li {
            list-style: none;
            display: inline-block;
            margin-right: 10px;
            margin-top: 10px;
        }

        .r-col .qty select {
            margin-left: -40px;

            width: 95px;
            /* box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px; */
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .r-col .color select {
            /* position: absolute; */

            width: 85px;
            /* box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px; */
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

        }

        ul li a {
            list-style-type: none;
            text-decoration: none;
            font-weight: 600;
        }

        .total h3 {
            font-size: 24px;
            font-weight: 700;
        }

        .total p {
            font-size: 22px;
            color: black;
        }

        .cart {
            margin-top: 20px;
            background-color: #f7ca00;
            height: 30px;
            width: 222px;
            outline: none;
            border: none;
            font-size: 14px;
            border-radius: 30px;
            font-weight: 500;
            /* position: relative; */
        }
    </style>
</head>

<body style="background-color: rgb(237, 237, 237)">
    <?php
    include './profile/navbar.php'
    ?>
    <section>
        <div class="grid container-fluid">
            <div class="left-col">
                <h1>Shoping Cart</h1>
                <hr>
                <?php
                $serverame = "localhost";
                $username = "root";
                $password = "";
                $database = "e-commerce";
                $conn = new mysqli($serverame, $username, $password, $database);
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM cart_data WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_row($result)) {
                    $cartId = $data[0];
                    $title = $data[1];
                    $description = $data[2];
                    $image = $data[3];
                    $rate = $data[5];
                    $price = $data[4];
                    $category = $data[6];
                ?>
                    <div class="section ">
                        <div class="l-col">
                            <input type="checkbox" id="qty" value="<?php echo $price ?>" name="check" id="check1">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="r-col">
                            <div class="product-details">
                                <p class="heading"><?php
                                                    if (strlen($description) < 100) {
                                                        echo $description;
                                                    } else {
                                                        $words = explode(' ', $description);
                                                        echo implode(' ', array_slice($words, 0, 10)); // Corrected from 100 to 10
                                                    }
                                                    ?></p>
                                <p class="title_heading"><?php echo $title ?></p>
                                <span style="color: green;">In Stock</span>
                                <p>Eligible for free shiping </p>
                                <p><b>Catagory: </b><?php echo $category ?></p>
                                <p><b>Rating: </b> 4 star</p>
                            </div>
                            <ul>
                                <li class="qty">
                                    <select id="qty" class="form-select bg-light" aria-label="select example">
                                        <option selected>Qty: 1</option>
                                        <option value="2">Qty: 2</option>
                                        <option value="3">Qty: 3</option>
                                        <option value="4">Qty: 4</option>
                                        <option value="5">Qty: 5</option>
                                        <option value="6">Qty: 6</option>
                                        <option value="7">Qty: 7</option>
                                        <option value="8">Qty: 8</option>
                                        <option value="9">Qty: 9</option>
                                        <option value="10">Qty: 10</option>
                                    </select>
                                </li>
                                <li class="color">
                                    <select class="form-select bg-light" aria-label="select example">
                                        <option selected>S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                        <option value="4">XXL</option>
                                        <option value="4">XXXL</option>
                                    </select>
                                </li>
                                <li>
                                    <a name="delete" href="delete_item.php?cartId=<?php echo $cartId ?>">Delete</a>
                                </li>
                                <li>
                                    <a href="#">Save for later</a>
                                </li>
                                <li>
                                    <a href="#">Share</a>
                                </li>
                                <a href="buy.php?cart_id=<?php echo $cartId ?>"><button type="submit" style="background-color: #fa8900; color: #0f1111;" class="cart" onclink="tost()">Buy now</button></a>
                            </ul>

                            <div class="d-flex justify-content-end  price">
                                <h3 id="rate" name="price" value="<?php echo $price ?>"><?php echo $price ?>.00</h3>
                                <p id="price" class="d-flex justify-content-end"></p>

                            </div>
                        </div>
                    </div>

                    <hr>
                <?php
                }
            }
                else {
                    ?>
                    <img class="d-flex justify-content-center" style="height:400px; width: 400px; margin-left: 30%;" src="./images/undraw_empty_re_opql.svg" alt="">
                    <h1 class="text-center">No Item Found</h1>
                    <h6 class="text-center">Please Add to cart first</h6>
                <?php
                }
                ?>
                <div class="d-flex justify-content-end total">
                    <p>Subtotal (<?php echo mysqli_num_rows($result); ?> items): ₹
                    <h3 id="subtotal">00</h3>
                    </p>
                </div>
            </div>
            <div class="right-col">
                <div class="heading my-3">
                    <h3>Pricing</h3>
                </div>
                <div class="pricing row">
                    <div class="d-flex justify-content-start total">
                        <p>Subtotal (<?php echo mysqli_num_rows($result); ?> items): ₹
                        <h3 id="subtotal1">00</h3>
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- <script src="script.js"></script> -->
    <script>
        function calculateTotal() {
            // Get all checkboxes
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var total = 0;

            // Loop through each checkbox
            checkboxes.forEach(function(checkbox) {
                // If checkbox is checked
                if (checkbox.checked) {
                    // Get the price of the corresponding item
                    var price = parseFloat(checkbox.value);
                    // Add the price to the total
                    total += price;
                }
            });

            // Display the total price
            document.getElementById("subtotal").textContent = total.toFixed(2);
            document.getElementById("subtotal1").textContent = total.toFixed(2);
        }

        // Add event listener to call calculateTotal function when any checkbox is clicked
        document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
            checkbox.addEventListener('click', calculateTotal);
        });

        // Call calculateTotal function initially
        calculateTotal();
    </script>
</body>

</html>