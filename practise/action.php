<?php
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

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO cart (title, description, image, price, rate) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssdi", $title, $cat, $desc, $img, $price, $rate);

    // Sanitize and set parameters
    $title = htmlspecialchars($_POST['title']);
    $cat = htmlspecialchars($_POST['cat']);
    $desc = htmlspecialchars($_POST['desc']);
    $img = htmlspecialchars($_POST['img']);
    $price = floatval($_POST['price']); // Assuming price is a decimal/float
    $rate = intval($_POST['rate']); // Assuming rate is an integer

    // Execute statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Submitted');</script>";
        echo "<script>window.location.href='add_stock.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
?>
