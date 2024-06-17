<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
  <title>E-Commerce</title>
</head>

<body>
  <?php
  include "../profile/navbar.php";
  ?>

  <section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div id="home" class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/carsolate/5298-Sports---GFD-hero-Feb24-Adult--kids-cycles-3000._CB581619199_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/pc-3_2x._CB584618827_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/D103625178_DesktopTallHero_3000x1200._CB574597993_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/PC_3000_1._CB581367587_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/PC_Hero_1_3000._CB582457311_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/S2_3000x1200_V2._CB581177837_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/Skincare-PCgf._CB584595621_.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/carsolate/TallHero_3000X1200_Unrec._CB593464763_.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section>
    <div class="container d-flex justify-content-center">
      <div class="shop-section">
        <div class="shop-images">
          <div class="shop-link">
            <h2>Shop 60% | for Mens</h2>
            <a href="../men.php"> <img src="https://m.media-amazon.com/images/I/71V5gEc8YVL._SY550_.jpg" alt="card"></a>
            <a href="../men.php">Shop now</a>
          </div>
          <div class="shop-link">
            <h2>Shop 40% | off for Kids</h2>
            <a href="../kids.php"> <img src="https://m.media-amazon.com/images/I/71QH5dDGpkL._SY550_.jpg" alt="card"></a>
            <a href="../.php">Shop now</a>
          </div>
          <div class="shop-link">
            <h2>Shop 60% | for Womens</h2>
            <a href="../women.php"><img src="https://m.media-amazon.com/images/I/51p-Mg++mRL._SY550_.jpg" alt="card"></a>
            <a href="../women.php">Shop now</a>
          </div>
          <div class="shop-link">
            <h2>Shoes for men | 70% off</h2>
            <a href="../men.php"><img src="https://m.media-amazon.com/images/I/51THyVatjZL._SY606_.jpg" alt="card"></a>
            <a href="../men.php">Shop now</a>
          </div>
        </div>
      </div>
      <section>
        <!-- <div class="container"> -->
        <div class="container-fluid">
          <div class="horizontal-scroll">
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(1)"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="head">
              <h2>Trading Product For Men's</h2>
            </div>
            <ul class="story-container">
              <?php
              $servename = "localhost";
              $username = "root";
              $password = "";
              $database = "e-commerce";
              $conn = new mysqli($servename, $username, $password, $database);
              $sql = "SELECT * FROM products WHERE catagory='mens' LIMIT 8";
              $result = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_row($result)) {
              ?>
                <li>
                  <a href="../men.php"><img class="bg-light" src="<?php echo $data[5]; ?>" alt=""></a>
                  <div class="desc">
                    <span>₹500 and under</span>
                    <span>Limited time deal</span><br>
                    <span>Top rated shirt for mens</span>
                  </div>
                  <a href="../men.php">View More</a>
                </li>
              <?php
              }
              ?>

            </ul>
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(-1)"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
          <!-- Shop Section -->

          <div class="shop-section1">
            <div class="shop-images1">
              <div class="shop-link1">
                <h2>Shop 60% off for men</h2>
                <img src="../images/men/MF-1-186-116._SY116_CB636110853_.jpg" alt="card">
                <a href="../mens.php">Shop now</a>
              </div>
              <div class="shop-link1">
                <h2>Shop Kichen Accs</h2>
                <img src="../images/kichen/1x_Desktop_Quad_card_w_title_-_Card_1._SY116_CB572041232_.jpg" alt="card">
                <a href="../mens.php">Shop now</a>
              </div>
              <div class="shop-link1">
                <h2>Create with Strip Lights</h2>
                <img src="../images/homeDecor/186x116_Home_decor_1._SY116_CB584596691_.jpg" alt="card">
                <a href="../mens.php">Shop now</a>
              </div>
              <div class="shop-link1">
                <h2>Shoes for men | 70% off</h2>
                <img src="../images/shoes/1.avif" alt="card">
                <a href="../mens.php">Shop now</a>
              </div>
            </div>
          </div>
          <!-- horizontal-scroll -->
          <div class="horizontal-scroll">
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(1)"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="head">
              <h2>Grocery Product</h2>
            </div>
            <ul class="story-container">
              <?php
              $servename = "localhost";
              $username = "root";
              $password = "";
              $database = "e-commerce";
              $conn = new mysqli($servename, $username, $password, $database);
              $sql = "SELECT * FROM products WHERE catagory='grocery' LIMIT 8";
              $result = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_row($result)) {
              ?>
                <li>
                  <a href="../men.php"><img class="bg-light" src="<?php echo $data[5]; ?>" alt=""></a>
                  <div class="desc">
                    <span>₹500 and under</span>
                    <span>Limited time deal</span><br>
                    <span>Top rated shirt for mens</span>
                  </div>
                  <a href="../men.php">View More</a>
                </li>
              <?php
              }
              ?>

            </ul>
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(-1)"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
          <div class="horizontal-scroll">
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(1)"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="head">
              <h2>Women's Product</h2>
            </div>
            <ul class="story-container">
              <?php
              $servename = "localhost";
              $username = "root";
              $password = "";
              $database = "e-commerce";
              $conn = new mysqli($servename, $username, $password, $database);
              $sql = "SELECT * FROM products WHERE catagory='women' LIMIT 8";
              $result = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_row($result)) {
              ?>
                <li>
                  <a href="../men.php"><img class="bg-light" src="<?php echo $data[5]; ?>" alt=""></a>
                  <div class="desc">
                    <span>₹500 and under</span>
                    <span>Limited time deal</span><br>
                    <span>Top rated shirt for mens</span>
                  </div>
                  <a href="../men.php">View More</a>
                </li>
              <?php
              }
              ?>
            </ul>
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontaly(-1)"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>
        <!-- </div> -->
      </section>
    </div>
  </section>
  <footer>
    <div class="jumpTop">
      <span><a href="#nav2">Back to top</a></span>
    </div>
  </footer>
  <script src="./index.js"></script>
</body>

</html>