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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="style.css" />
    <title>E-Commerce</title>
</head>

<body>

    <?php
    include './profile/navbar.php'
    ?>
    <section>
        <div class="container-fluid">
            <div class="horizontal-scroll">
                <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(1)"><i class="fa-solid fa-chevron-left"></i></button>

                <div class="story-container">
                    <div class="gallary story-circle">
                        <img title="Gift & Vouchers" src="./images/scroll/All_Asin-Icon.2_4950x150_01-09.jpg" alt="Harry Potter">
                    </div>

                    <div class="gallary story-circle ">
                        <img src="./images/scroll/All_ASIN-Icons_150x150_Books.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/All_ASIN-Icons_150x150_PCA.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/All_ASIN-Icons_150x150_VG.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/All_ASIN-Icons_Template_2_332.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/all_deals.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/All_Icons_Template_1_icons_01.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/amazon_business.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/automobiles.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/blockbuster.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/clothinghalos-model-icon.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/computer_accessories.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/electronics.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/footwear-icon.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/furniture.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/grocery.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/health__households.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/Home__kitchen.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/home_appliances.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/Icons_Beauty1.png" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/jewelleryhalos.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/music.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/PB-icon.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/pet.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/sports.jpg" alt="Harry Potter">
                    </div>
                    <div class="gallary story-circle ">
                        <img src="./images/scroll/trending.jpg" alt="Harry Potter">
                    </div>
                </div>
                <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(-1)"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>
    <section id="productSection">
        <div class="container-fluid row">
            <div class="col-sm-2" style="height: 100%;">
                <div style="position: sticky;" class="coloum1 ">
                    <form id="filterForm" method="post">
                        <div class="animation">
                            <h3>Filter</h3>
                            <h5>Category</h5>
                            <select name="cartegory" id="category">
                                <!-- <option value="mens">Mens</option>
                                <option value="women">Womens</option>
                                <option value="kids">Kids</option>-->
                                <?php
                                $servename = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "e-commerce";
                                $conn = new mysqli($servename, $username, $password, $database);
                                $sql = "SELECT DISTINCT catagory FROM products WHERE catagory='grocery'";
                                $result1 = mysqli_query($conn, $sql);
                                if ($result1->num_rows > 0) {
                                    while ($row = $result1->fetch_assoc()) {
                                        $cat = $row['catagory'];
                                ?>
                                        <option value="<?php echo $cat ?>"><?php echo $cat ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>

                            <hr>
                            <h5>Product</h5>
                            <select name="product" id="product">
                                <option value="">---select---</option>
                                <?php
                                $servename = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "e-commerce";
                                $conn = new mysqli($servename, $username, $password, $database);
                                $sql1 = "SELECT DISTINCT product FROM products WHERE catagory='$cat'";
                                $result1 = mysqli_query($conn, $sql1);
                                if ($result1->num_rows > 0) {
                                    while ($row = $result1->fetch_assoc()) {
                                        $product = $row['product'];
                                ?>
                                        <option id="shirt" name="" value="<?php echo $product; ?>"> <?php echo $product; ?></option> <br>
                                <?php
                                    }
                                }
                                ?>
                            </select>

                            <hr>
                            <h5>BRAND</h5>
                            <select name="brand" id="brand">
                                <option value="">---select---</option>
                                <?php
                                $servename = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "e-commerce";
                                $conn = new mysqli($servename, $username, $password, $database);
                                $sql1 = "SELECT DISTINCT brand FROM products WHERE catagory='$cat'";
                                $result1 = mysqli_query($conn, $sql1);
                                if ($result1->num_rows > 0) {
                                    while ($row = $result1->fetch_assoc()) {
                                        $brand = $row['brand'];
                                ?>
                                        <option id="shirt" name="" value="<?php echo $brand; ?>"> <?php echo $brand; ?></option> <br>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <hr>
                            <h5>PRICE</h5>
                            <span> Min-Price</span>
                            <input id="price2" name="min" type="text"><br>
                            <span> Max-Price</span>
                            <input id="price1" name="max" type="text"><br>
                            <hr>
                            <button name="apply" class="btn btn-primary">Apply</button>

                            <hr>
                            <h5>CUSTOMER RATINGS</h5>
                            <label><input id="rating1" name="rating1" type="checkbox"><span> 4★ & above</span></label><br>
                            <label><input id="rating1" name="rating2" type="checkbox"><span> 3★ & above</span></label>
                        </div>
                    </form>
                </div>
            </div>
            <div id="maindiv" class="col-sm-10 row">
                <div class="header">
                    <h1 id="show_count">
                        33 Items
                    </h1>

                </div>

                <?php
                // error_reporting(0);
                $serverame = "localhost";
                $username = "root";
                $password = "";
                $database = "e-commerce";
                $conn = new mysqli($serverame, $username, $password, $database);
                $sess = $_SESSION['email'];
                if (!$conn) {
                    echo "<script>alert('Database is not connected')</script>";
                } else {
                    $sql5 = "SELECT * FROM products WHERE catagory='$cat' AND 1=1";
                    $sql3 = "SELECT count(id) as co FROM products WHERE 1=1";

                    if (isset($_POST['apply'])) {
                        $cat = $_POST['cartegory'];
                        $product = $_POST['product'];
                        $max_price = $_POST['max'];
                        $min_price = $_POST['min'];
                        $brand = $_POST['brand'];
                        if (!empty($cat)) {
                            $sql3 .= " AND catagory = '$cat'";
                            $count = $conn->query($sql3);

                            $sql5 .= " AND catagory = '$cat'";
                        }
                        if (!empty($product)) {
                            $sql3 .= " AND product = '$product'";
                            $count = $conn->query($sql3);

                            $sql5 .= " AND product = '$product'";
                        }
                        if (!empty($brand)) {
                            $sql3 .= " AND brand = '$brand'";
                            $count = $conn->query($sql3);

                            $sql5 .= " AND brand = '$brand'";
                        }

                        if (!empty($min_price)) {
                            $sql3 .= " AND price >= '$min_price'";
                            $count = $conn->query($sql3);

                            $sql5 .= " AND price >= '$min_price'";
                        }
                        if (!empty($max_price)) {
                            $sql3 = "SELECT count(id) as co FROM products";
                            $count = $conn->query($sql3);

                            $sql5 .= " AND price <= '$max_price'";
                        }
                        if ($count->num_rows > 0) {
                            $data = $count->fetch_assoc();

                ?> <input hidden value="<?php echo $data['co']; ?>" class="item_count">
                        <?php
                        } else {
                            echo "No Item Found";
                        }
                        $result = mysqli_query($conn, $sql5);
                        while ($data = mysqli_fetch_row($result)) {
                        ?>
                            <div id="productListing" class="card text-center" style="width:17.5rem; text-decoration:none; color:black;">
                                <a href="details.php?id=<?php echo $data[0] ?>" target="_blank"><img src="<?php echo $data[5] ?>" style="margin-top:10px; height:12rem; width:10rem; margin-left:1rem" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data[1] ?></h4>
                                    <b class="desc"><?php echo $data[2] ?></b><br>
                                    <span class="offer mt-1">Limited time deal</span>
                                    <p class="card-text mt-1">Ratting: <?php echo $data[7] ?> <br>Qty: 100</p>
                                    <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup><?php echo $data[6] ?></div>
                                    <div class="card-text">Free Delivery by Amazon</div>
                                    <!-- <button id="${btnId}" type="submit" class="cart">Add to cart</button> -->
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        $result = mysqli_query($conn, $sql5);
                        while ($data = mysqli_fetch_row($result)) {
                        ?>
                            <div id="productListing" class="card text-center" style="width:17.5rem; text-decoration:none; color:black;">
                                <a href="details.php?id=<?php echo $data[0] ?>" target="_blank"><img src="<?php echo $data[5] ?>" style="margin-top:10px; height:12rem; width:10rem; margin-left:1rem" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data[1] ?></h4>
                                    <b class="desc"><?php echo $data[2] ?></b><br>
                                    <span class="offer mt-1">Limited time deal</span>
                                    <p class="card-text mt-1">Ratting: <?php echo $data[7] ?> <br>Qty: 100</p>
                                    <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup><?php echo $data[6] ?></div>
                                    <div class="card-text">Free Delivery by Amazon</div>
                                    <!-- <button id="${btnId}" type="submit" class="cart">Add to cart</button> -->
                                </div>
                            </div>
                <?php
                        }
                    }
                }

                // }
                ?>
            </div>
        </div>
    </section>
    <script>
        let countElement = document.querySelector('.item_count').value;
        // let count = countElement.textContent;
        console.log(countElement);
        document.getElementById("show_count").textContent = countElement + "  items";
    </script>
    <!-- <script src="index.js"></script> -->
    <!-- <script src="script.js"></script> -->
</body>

</html>