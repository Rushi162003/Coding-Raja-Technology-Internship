<?php
// error_reporting(0); // Uncomment this if you want to suppress errors
$servername = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($servername, $username, $password, $database);
$sess = $_SESSION['email'];

if (!$conn) {
    echo "<script>alert('Database is not connected')</script>";
} else {
    if (isset($_POST['action'])) {
        $sql5 = "SELECT * FROM products WHERE 1=1";

        // Check if price range is provided
        if (isset($_POST['price1'], $_POST['price2']) && !empty($_POST['price1']) && !empty($_POST['price2'])) {
            $price1 = $_POST['price1'];
            $price2 = $_POST['price2'];
            $sql5 .= " AND price BETWEEN '$price1' AND '$price2'";
        }

        // Check if brand filter is provided
        if (isset($_POST['brand']) && !empty($_POST['brand'])) {
            $brand_filter = implode("','", $_POST["brand"]);
            $sql5 .= " AND brand IN ('$brand_filter')";
        }

        // Check if category filter is provided
        if (isset($_POST['category']) && !empty($_POST['category'])) {
            $category_filter = implode("','", $_POST["category"]);
            $sql5 .= " AND category IN ('$category_filter')";
        }

        // Check if product filter is provided
        if (isset($_POST['product']) && !empty($_POST['product'])) {
            $product_filter = implode("','", $_POST["product"]);
            $sql5 .= " AND product IN ('$product_filter')";
        }

        // Execute the query
        $result = $conn->query($sql5);

        // Check if there are results
        if ($result && $result->num_rows > 0) {
            // Initialize output variable
            $output = '';

            // Loop through each row in the result set
            while ($data = $result->fetch_assoc()) {
                // Generate HTML for each product card
                $output .= '<div class="card text-center" style="width:17.5rem; text-decoration:none; color:black;">
                                <a href="details.php?id=' . $data['id'] . '" target="_blank"><img src="' . $data['image_url'] . '" style="margin-top:10px; height:12rem; width:10rem; margin-left:1rem" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h4 class="card-title">' . $data['title'] . '</h4>
                                    <b class="desc">' . $data['description'] . '</b><br>
                                    <span class="offer mt-1">Limited time deal</span>
                                    <p class="card-text mt-1">Rating: ' . $data['rating'] . ' <br>Qty: 100</p>
                                    <div class="card-text" id="mrp"><span class="off">-60% </span><sup>₹</sup>' . $data['price'] . '</div>
                                    <div class="card-text">Free Delivery by Amazon</div>
                                    <!-- <button id="${btnId}" type="submit" class="cart">Add to cart</button> -->
                                </div>
                            </div>';
            }

            // Output the generated HTML
            echo $output;
        } else {
            // No data found
            echo '<h3>No Data Found</h3>';
        }
    } else {
        // Action not set
        echo '<h3>No Data Found</h3>';
    }
}
