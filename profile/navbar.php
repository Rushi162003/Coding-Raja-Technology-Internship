<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <!-- <link rel="stylesheet" href="../Stylecss/style.css"> -->
  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Nav  Bar  */

    .navbar {
      font-family: Arial, Helvetica, sans-serif;
    }

    .navbar-nav form {
      margin-left: 150px;
      padding: 10px;
    }

    #profile img {
      height: 35px;
      width: 35px;
      border-radius: 50%;
      margin-top: 10px;
    }

    #profile .btn {
      font-size: 14px;
      font-weight: 700;
    }

    .nav-item {
      padding-top: 10px;
      /* width: 100px; */
    }

    .location {
      position: relative;
      height: 20px;
      width: 25px;
      margin-top: -20px;
    }

    .nav-link b {
      font-family: Arial, Helvetica, sans-serif;
      position: absolute;
      color: white;
      font-size: 14px;
      font-weight: 700;
    }

    .nav-link span {
      font-family: Arial, Helvetica, sans-serif;
      position: absolute;
      color: white;
      margin-top: -20px;
      font-size: 12px;
      color: #cccccc;
    }

    #proflie {
      margin-right: 100px;
      display: flex;
      align-items: center
    }

    #nav2 {
      background-color: #232f3e;
      /* margin-top: 0; */
      color: white;
      padding-top: 0;
      z-index: 1000;
    }

    #nav2 li a {
      text-decoration: none;
      color: white;
      font-size: 14px;
      line-height: 12px;
      font-family: sans-serif;
    }

    #nav2 a:hover {
      color: white;
    }

    #search {
      height: 40px;
      width: 600px;
    }

    .form-control:focus {
      border-color: #f3a847;
      box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px #f3a847;
    }

    #searchBox {
      margin-top: 10px;
      border-radius: 50px;
      margin-left: 150px;
    }

    #searchBtn {
      height: 40px;

    }

    .india {
      height: 25px;
      width: 24px;
      margin: 5px;
      border-radius: 0pxx;
    }

    .btn {
      color: white;
      font-size: larger;
    }

    .btn:hover {
      color: white;
    }

    /* Nav  Bar End */
    #carouselExampleDark img {
      height: 500px;
      width: 700px;
    }

    .d-block {
      margin-left: 26%;
    }

    .card {
      margin: 10px;
      line-height: 20px;
      box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
      cursor: pointer;
    }

    .card b {
      font-family: "bree serif";
      color: #808080;
    }

    .card img {
      height: 250px;
      width: 17.5rem;
      margin-left: -12px;
    }

    span {
      font-family: "bree serif";
      /* color: #808080;    */
      color: blue;
    }

    .header h1 {
      text-align: center;
      color: #808080;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 30px;
      font-weight: 700;
    }

    .coloum1 {
      float: left;
      height: 100%;
      width: 100%;
      padding: 10px;

    }

    #nav2 .logout {
      margin-left: 580px;
      display: flex;
      justify-content: end;
      /* margin-top: 10px; */
    }

    .logout button {
      background: transparent;
      outline: none;
      border: none;
    }

    .logout a {
      text-decoration: none;
      color: white;
      font-weight: 700;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark pt-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="\E_commerce\home\index.php">E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item location_head">
            <a class="nav-link active" aria-current="page" href="\E_commerce\profile\location_update.php"><img class="location" src="\E_commerce\images\icons8-location-ios-17\icons8-location-50.png" alt="">
              <span>delivering to </span>
              <b><?php
                  // Start session

                  // Check if the user is logged in
                  if (isset($_SESSION['email'])) {
                    // session_start();
                    // Database connection parameters
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "e-commerce";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }

                    // Get the user's email from session
                    $email = $_SESSION['email'];

                    // Prepare SQL query to fetch user details
                    $sql = "SELECT * FROM signup WHERE email = '$email'";

                    // Execute query
                    $result = $conn->query($sql);

                    // Check if user exists 
                    if ($result->num_rows > 0) {
                      // Fetch user data
                      $data = $result->fetch_assoc();
                      echo $data['location']; // Assuming 'name' is the column containing the user's name
                    } else {
                      echo "Update Location"; // User not found in database
                    }

                    // Close connection
                    // $conn->close();
                  } else {
                    echo "Update Location"; // User not logged in
                  }
                  ?></b></a>
          </li>
        </ul>
        <div id="searchBox" class="input-group mb-3">
          <span id="searchAll" class="input-group-text">All</span>
          <input id="search" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span id="searchBtn" style="background-color: #f3a847;" class="input-group-text"><i class="fa-solid fa-magnifying-glass ligh fa-l"></i></span>
        </div>
        <li class="nav-item dropdown" style="margin-top: -30px;">
          <a class="nav-link dropdown-toggle" href="#dropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            <img class="india" src="\E_commerce\images\india.png" alt="">EN
          </a>
          <ul class="dropdown-menu" id="dropdown" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">हिन्दी - HI</a></li>
            <li><a class="dropdown-item" href="#">मराठी - MR</a></li>
            <li><a class="dropdown-item" href="#">தமிழ் - TA</a></li>
            <li><a class="dropdown-item" href="#">తెలుగు - TE</a></li>
            <li><a class="dropdown-item" href="#">ಕನ್ನಡ - KN</a></li>
            <li><a class="dropdown-item" href="#">മലയാളം - ML</a></li>
            <li><a class="dropdown-item" href="#">বাংলা - BN</a></li>
          </ul>
        </li>
        <form id="profile" class="d-flex justify-content-center">
          <a href="\E_commerce\login\login.php" class="btn" type="submit" name="acc_login" style="color: #f3a847; ">
            <?php
            // Start session

            // Check if the user is logged in
            if (isset($_SESSION['email'])) {
              // session_start();
              // Database connection parameters
              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "e-commerce";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $database);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              // Get the user's email from session
              $email = $_SESSION['email'];

              // Prepare SQL query to fetch user details
              $sql = "SELECT * FROM signup WHERE email = '$email'";

              // Execute query
              $result = $conn->query($sql);

              // Check if user exists
              if ($result->num_rows > 0) {
                // Fetch user data
                $data = $result->fetch_assoc();
                $name =  $data['name'];
                // echo "Welcome, " . $data['name']; // Assuming 'name' is the column containing the user's name
                // $name = "YourNameHere"; // Replace "YourNameHere" with the actual name

                if (strlen($name) > 20) {
                  $shortened_name = substr($name, 0, 20);
                  echo $shortened_name;
                } else {
                  echo $name;
                }
              } else {
                echo "Account & Login"; // User not found in database
              }

              // Close connection
              // $conn->close();
            } else {
              echo "Account & Login"; // User not logged in
            }
            ?>
          </a>
        </form>
        <form id="profile" class="d-flex justify-content-center">
          <a href="\E_commerce\my_order.php" class="btn" type="submit">My orders</a>
        </form>
        <form id="profile" class="d-flex justify-content-center">
          <a href="\E_commerce\cart.php" class="btn" type="submit"><i class="fa-solid fa-cart-shopping"></i> cart</a>
        </form>
      </div>
    </div>
  </nav>
  <nav id="nav2" class="navbar navbar-expand-sm justify-content-start">
    <ul id="nav2ul" class="navbar-nav">
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fa-solid fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="\E_commerce\mens.php" class="nav-link">All</a>
      </li>
      <li class="nav-item">
        <a href="\E_commerce\men.php" class="nav-link">Men</a>
      </li>
      <li class="nav-item">
        <a href="\E_commerce\women.php" class="nav-link">Women</a>
      </li>
      <li class="nav-item">
        <a href="\E_commerce\kids.php" class="nav-link">Kids</a>
      </li>
      <li class="nav-item">
        <a href="\E_commerce\mobile.php" class="nav-link">Mobiles</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Sport</a>
      </li>
      <li class="nav-item">
        <a href="grocery.php" class="nav-link">Grocery</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Customer Service</a>
      </li>
      <li class="nav-item">
        <a href="\E_commerce\electronic.php" class="nav-link">Electronics</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Prime</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Fashion</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Amazon Pay</i>
        </a>
      </li>

    </ul>
    <div class="logout">
      <!-- <button type="submit"> -->
      <a href="logout.php">logout</a>
      <!-- </button>0 -->
    </div>
  </nav>
</body>

</html>