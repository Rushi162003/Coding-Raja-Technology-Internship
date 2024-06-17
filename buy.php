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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
    <style>
        nav {
            background-color: white;
            padding: 10px 0;
            /* box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; */
            box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;
        }

        ul li {
            height: 70px;
            list-style-type: none;
        }

        .accordion-item {
            border: none;
            outline: none;
        }

        .delivery {
            color: green;
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
            height: auto;
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

        .wty li {
            list-style: none;
            display: inline-block;
            margin-right: 10px;
            margin-top: 10px;
        }

        .cart {
            margin-top: 20px;
            background-color: #f7ca00;
            height: 30px;
            width: 152px;
            outline: none;
            border: none;
            font-size: 14px;
            border-radius: 30px;
            font-weight: 500;
            /* position: relative; */
        }

        .order_price {
            font-weight: 650;
        }
    </style>
</head>

<body>
    <nav class="container">
        <div class=" container d-flex justify-content-between">
            <h5>E-Commerce</h5>
            <h4>CHECKOUT</h4>
            <div></div>
        </div>
    </nav>
    <section>
        <div class="grid container mt-5">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5>1 Delivery address</h5>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php
                            // error_reporting(0);
                            if (isset($_SESSION['email'])) {
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "e-commerce";
                                $conn = new mysqli($servername, $username, $password, $database);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $email = $_SESSION['email'];
                                $sql = "SELECT * FROM signup WHERE email = '$email'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    $data = $result->fetch_assoc();
                                    echo $data['address'] . ", " . $data['location']; // Assuming 'name' is the column containing the user's name
                                } else {
                                    echo "Update Location"; // User not found in database
                                }
                            } else {
                                echo "Update Location"; // User not logged in
                            }

                            ?><br>
                            <a href="./profile/location_update.php">Update Address</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5>2 Payment Method</h5>

                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    <h6><label><input disabled type="radio" name="radio" id="credit"><span> Credit card & Debit card </span></label></h6> <br>
                                </li>
                                <li>
                                    <h6><label><input disabled type="radio" name="radio" id="netbanking"><span> Net Banking </span></label></h6> <br>
                                </li>
                                <li>
                                    <h6><label><input disabled type="radio" name="radio" id="upi"><span>Other Upi apps</span></label></h6> <br>
                                </li>
                                <li>
                                    <h6><label><input type="radio" name="radio" checked id="cod"><span> Cash on Delivery </span></label></h6> <br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5>3 Review Item & Delivery</h5>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h6 class="delivery">
                                Arriving <?php echo date("d-m-Y"); ?>
                            </h6>
                            <form method="post">
                                <?php

                                // use PHPMailer\PHPMailer\PHPMailer;
                                // use PHPMailer\PHPMailer\Exception;

                                // if (isset($_POST['place_order'])) {

                                //   require 'vendor/autoload.php';

                                //     $mail = new PHPMailer(true);

                                //     try {
                                //         // SMTP configuration for Gmail
                                //         $mail->isSMTP();
                                //         $mail->Host = 'smtp.gmail.com';
                                //         $mail->SMTPAuth = true;
                                //         $mail->SMTPSecure = 'tls'; // Enable TLS encryption
                                //         $mail->Port = 587; // TCP port to connect to
                                //         $mail->Username = 'rushijagdale1605@gmail.com'; // Your Gmail address
                                //         $mail->Password = 'Rushi@162003'; // Your Gmail password

                                //         // Sender and recipient details
                                //         $mail->setFrom('rushijagdale1605@gmail.com', 'Tejas Jagdale');
                                //         $mail->addAddress('rushijagdale1605@gmail.com', 'Tejas Jagdale');

                                //         // Email content
                                //         $mail->Subject = 'Test Email from PHPMailer';
                                //         $mail->Body = 'This is a test email sent using PHPMailer with Gmail SMTP.';

                                //         // Send the email
                                //         $mail->send();
                                //         echo 'Email sent successfully.';
                                //     } catch (Exception $e) {
                                //         echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                //     }
                                // }
                                ?>
                                <div class="left-col">
                                    <?php
                                    $serverame = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "e-commerce";
                                    $conn = new mysqli($serverame, $username, $password, $database);
                                    $id = $_GET['cart_id'];
                                    $sql = "SELECT * FROM cart_data WHERE cart_id = '$id'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($data = mysqli_fetch_array($result)) {
                                        $cartId = $data['cart_id'];
                                        $title = $data['title'];
                                        $description = $data['description'];
                                        $image = $data['image'];
                                        $rate = $data['rate'];
                                        $price = $data['price'];
                                        $category = $data['category'];
                                    ?>
                                        <div class="section">
                                            <div class="l-col">
                                                <img src="<?php echo $image ?>" alt="">
                                                <input hidden type="text" name="image1" value="<?php echo $image ?>" id="">
                                            </div>
                                            <div class="r-col">
                                                <div class="product-details">
                                                    <p class="heading"><?php echo $description ?></p>
                                                    <input hidden type="text" name="desc" value="<?php echo $description ?>">
                                                    <p class="title_heading"><?php echo $title ?></p>
                                                    <input hidden type="text" name="title1" value="<?php echo $title ?>" id="">
                                                    <span style="color: green;">In Stock</span>
                                                    <p>Eligible for free shiping </p>
                                                    <p><b>Catagory: </b><?php echo $category ?></p>
                                                    <input hidden type="text" name="cat" value="<?php echo $category ?>" id="">
                                                    <p><b>Rating: </b> <?php echo $rate ?></p>
                                                    <input hidden type="text" name="rate1" value="<?php echo $rate ?>">
                                                </div>
                                                <ul class="wty">
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
                                                    <button type="submit" name="place_order" class="cart">Place order</button>

                                                </ul>

                                                <div class="d-flex justify-content-end  price">
                                                    <h3 id="rate" name="price" value="<?php echo $price ?>"><?php echo $price ?>.00</h3>
                                                    <input hidden type="text" name="price1" value="<?php echo $price ?>">
                                                    <p id="price" class="d-flex justify-content-end"></p>
                                                </div>
                                            </div>
                                        </div>
                            </form>

                            <hr>
                        <?php
                                    }

                                    if (isset($_POST['place_order'])) {
                                        $random_uid = uniqid() . mt_rand(1000, 9999);
                                        $random_uid = bin2hex(random_bytes(8)); // 8 bytes = 16 hexadecimal characters
                                        $email = $_SESSION['email'];
                                        $title1 = $_POST['title1'];
                                        $desc = $_POST['desc'];
                                        $image1 = $_POST['image1'];
                                        $cat = $_POST['cat'];
                                        $price1 = $_POST['price1'];
                                        $rate1 = $_POST['rate1'];
                                        $sql1 = "INSERT INTO place_order(uid, title, description, image, price, email) VALUES ('$random_uid', '$title1', '$desc', '$image', '$price1', '$email') ";
                                        $result1 = mysqli_query($conn, $sql1);
                                        if ($result1) {
                                            echo "<script>alert('Your Order are placed')</script>";
                                            $sql2 = "DELETE FROM cart_data WHERE cart_id='$id'";
                                            $result2 = mysqli_query($conn, $sql2);
                                            echo "<script>window.location.href='my_order.php'</script>";
                                        } else {
                                            echo "<script>alert('Your Order are not placed')</script>";
                                        }
                                    }
                        ?>
                        <div class="d-flex justify-content-end total">
                            <h4 class="order_price" style="color:#b12704">Order Total : <?php echo $price ?>.00</h4>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        // function toast() {
        //     window.history.back() 
        //    alert("Your order are placed")
        // }
    </script>
</body>

</html>