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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body style="background-color: rgb(237, 237, 237)">
    <?php
    include './navbar.php';
    ?>
    <section>
        <div class="grid container-fluid">
            <div class="left-col">
                <h1>Shoping Cart</h1>
                <p id="prive" class="d-flex justify-content-end">Price</p>
                <hr>
                <div class="section">
                    <div class="l-col">
                        <input type="checkbox" id="qty" value="1129990" name="check" id="check1">
                        <img src="../images/laptop/apple-macbook-air-m1-13-3-inch-lightwings-original-imag3gh5xftgbpg3.webp" alt="">
                    </div>
                    <div class="r-col">
                        <div class="product-details">
                            <p class="heading">Apple Macbook Air m1 13 3 inch lightwings original imag3gh5xftgbpg3</p>
                            <span style="color: green;">In Stock</span>
                            <p>Eligible for free shiping </p>
                            <p><b>Style Name:</b> Apple</p>
                            <p><b>Size:</b> 13 inches</p>
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
                                    <option selected>Black</option>
                                    <option value="2">Gray</option>
                                    <option value="3">White</option>
                                    <option value="4">Silver</option>
                                </select>
                            </li>
                            <li>
                                <a href="#">Delete</a>
                            </li>
                            <li>
                                <a href="#">Save for later</a>
                            </li>
                            <li>
                                <a href="#">Share</a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-end  price">
                            <h3 id="rate" name="price" value="112999"><sup>₹</sup></h3>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="l-col">
                        <input type="checkbox" value="11999" name="check" id="check2">
                        <img src="../images/laptop/apple-macbook-air-m1-13-3-inch-lightwings-original-imag3gh5xftgbpg3.webp" alt="">
                    </div>
                    <div class="r-col">
                        <div class="product-details">
                            <p class="heading">Apple Macbook Air m1 13 3 inch lightwings original imag3gh5xftgbpg3</p>
                            <span style="color: green;">In Stock</span>
                            <p>Eligible for free shiping </p>
                            <p><b>Style Name:</b> Apple</p>
                            <p><b>Size:</b> 13 inches</p>
                        </div>
                        <ul>
                            <li class="qty">
                                <select class="form-select bg-light" aria-label="select example">
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
                                    <option selected>Black</option>
                                    <option value="2">Gray</option>
                                    <option value="3">White</option>
                                    <option value="4">Silver</option>
                                </select>
                            </li>
                            <li>
                                <a href="#">Delete</a>
                            </li>
                            <li>
                                <a href="#">Save for later</a>
                            </li>
                            <li>
                                <a href="#">Share</a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-end  price">
                            <h3 id="rate1" name="price" value="11999"><sup>₹</sup></h3>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end total">
                    <p>Subtotal (1 item): ₹
                    <h3 id="total">00</h3>
                    </p>
                </div>
            </div>
            <div class="right-col">sadf</div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>