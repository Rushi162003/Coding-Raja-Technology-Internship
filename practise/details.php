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
    <title>Document</title>
</head>
<style>
    .details {
        margin-top: 20px;
    }

    .leftcol {
        display: grid;
        grid-template-columns: 35% 40%;
        gap: 50px;
    }

    .leftcol img {

        height: 600px;
        width: 450px;
    }

    .title {
        font-size: 26px;
        font-weight: 495;
        line-height: 32px;
        width: 439px;
        height: 96px;
    }

    .rating {
        margin-top: -10px;
        margin-left: -30px;
    }

    .rating li {
        list-style-type: none;
        display: inline-block;
        font-size: 17px;
        margin-right: 20px;
    }

    .rating li a {
        text-decoration: none;
    }

    .offer {
        width: 123px;
        height: 26px;
        font-family: "Amazon Ember", system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 14px;
        background-color: #cc0c39;
        line-height: 20px;
        font-weight: 520;
        color: white;
        padding: 5px;
        /* margin: 10px; */
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .off {
        color: red;
    }

    #mrp {
        margin-top: 10px;
        font-size: 24px;
        font-weight: 300;
    }

    .price {
        font-size: 30px;
        font-weight: 400;
    }

    .fackmrp {
        font-size: 12PX;
        color: gray;
        font-weight: 500;
    }

    .tax {
        font-size: 15px;
        font-weight: 500;
    }

    .details-col {
        /* border: 1px solid gray; */
        padding: 20px;
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

    .location img {
        width: 20px;
        color: black;
        height: 20px;
    }

    .location {
        text-decoration: none;
        font-size: 15px;
    }

    @media only screen and (max-width: 1200px) {
        .location img {
            width: 10px;
            height: 10px;
        }

        .details-col {
            position: absolute;
            margin-top: 600px;
        }

        .details-col .title {
            width: 300px;
            margin-bottom: 50px;
        }
    }

    @media only screen and (max-width: 768px) {
        .location img {
            width: 10px;
            height: 10px;
        }

        .details-col {
            position: absolute;
            margin-top: 600px;
        }

        .details-col .title {
            width: 300px;
            margin-bottom: 50px;
        }
    }
</style>


<body>

    <section>
        <div class="container details">
            <div class="leftcol">
                <?php
                $serverame = "localhost";
                $username = "root";
                $password = "";
                $database = "e-commerce";
                $conn = new mysqli($serverame, $username, $password, $database);
                $id = $_GET['id'];
                $sql = "SELECT * FROM mens_data WHERE id = '$id'";
                $result = mysqli_query($conn,$sql);
                while($data = mysqli_fetch_array($result)){
                    $title = $data['title'];
                    $desc = $data['description'];
                    $image = $data['image'];
                    $price = $data['price'];
                    $rate = $data['rate'];
                }
                ?>
                <div class="img-col">
                    <img src="<?php echo $image ?>" alt="">
                </div>
                <div class="details-col">
                    <p name="title" class="title"><?php echo $title?>
                    <h1><span class="fackmrp"><?php echo $desc ?></span></h1>
                    </p>
                    <ul class="rating">
                        <li><span name="rating"><?php echo $rate?></span> ⭐⭐⭐⭐</li>
                        <li><a href="#"> 2000 ratings</a></li>
                        <li><span style="color: gray;"> |</span></li>
                        <li><a href="#"> Search this page</a></li>
                    </ul>
                    <hr>
                    <div class="rate">
                        <span class="offer">Limited time deal</span>
                        <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup><span name="price" class="price"><?php echo $price?></span></div>
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
                        <button type="submit" class="cart" onclink="tost()">Add to cart</button>
                        <button type="submit" style="background-color: #fa8900; color: #0f1111;" class="cart" onclink="tost()">Buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>