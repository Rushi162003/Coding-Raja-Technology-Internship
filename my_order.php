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
        .container {
            width: 920px;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }

        .card ul li {
            list-style-type: none;
            display: inline-block;
            margin: 0 20px;
        }

        .card-body img {
            height: 90px;
            width: 90px;
        }

        .row {
            margin-left: 100px;
        }

        .card-text {
            margin-top: 10px;
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    include './profile/navbar.php'
    ?>
    <section>
        <div class="container mt-5">

            <h3 class="m-5">Your order</h3>

            <?php

            $serverame = "localhost";
            $username = "root";
            $password = "";
            $database = "e-commerce";
            $conn = new mysqli($serverame, $username, $password, $database);
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM place_order WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_row($result)) {

                    echo "<script>
                console.log('data found');
                 var orderDate = document.getElementById('date').value;
                var ordate = new Date(orderDate);
                var odate = ordate.getDate();
                var d = new Date();
                var day = d.getDate();
                var total = day - odate;
                document.getElementById('getate').textContent = total;
                </script>";
                    $uid = $data[1];
                    $title = $data[2];
                    $description = $data[3];
                    $image = $data[4];
                    $price = $data[5];
                    $date = $data[7];
            ?>


                    <div class="card">
                        <div class="card-header">
                            <ul>
                                <li>Order Placed
                                    <br>
                                    <h6><?php echo $date ?></h6>
                                </li>
                                <li>Total<br>
                                    <h6><?php echo $price ?></h6>
                                </li>
                                <li>Ship To<br>
                                    <h6><?php echo $date ?></h6>
                                    <input value="<?php echo $date ?>" hidden id="date">
                                </li>
                                <li>Order Id<br>
                                    <h6><?php echo $uid ?></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">

                            <div class="card-title">
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <img style="height:100px;width:120px; margin-left: 120px;" src="<?php echo $image ?>" alt="">
                                </div>
                                <div class="col-lg-5">
                                    <h6 class="card-text"><?php echo $description ?></h6>
                                    <h6 class="card-text"><?php echo $title ?></h6>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <span id="getate"></span> days ago
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <img class="d-flex justify-content-center" style="height:400px; width: 400px; margin-left: 30%;" src="./images/undraw_empty_re_opql.svg" alt="">

                <h1 class="text-center">No Order Found</h1>
                <h6 class="text-center">Place the order first</h6>
            <?php
            }
            ?>
        </div>
    </section>
    <script>

    </script>
</body>

</html>