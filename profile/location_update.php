<?php
session_start();
if (!$_SESSION['auth']) {
    // header('location: ./-My-Library-\index.php');
    echo "<script>window.location.href='../login/login.php'</script>";
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
    <!-- <link rel="stylesheet" href="login.css"> -->
    <title>Login</title>
</head>
<style>
    #login_main {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .head {
        display: flex;
        justify-content: center;
    }

    #login_main h1 {
        display: flex;
        top: 0;

    }

    .signup {
        height: 569;
        width: 700px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form p {
        font-size: 28px;
        font-size: 500;
    }

    form {
        height: 358;
        width: 348.4px;
        border: 1px solid rgb(223, 220, 220);
        padding: 14px 18px;
        border-radius: 8px;

    }

    label {
        font-size: 13px;
        font-weight: 650;
    }

    input,
    span,
    textarea {
        height: 31px;
        outline: 1px solid #a6a6a6;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 75px 222px;
    }

    .number {
        float: right;
        margin-left: 10px;
    }

    .bio {
        width: 312;
        height: 63;
        /* margin-left: 10px; */
        margin-top: 15px;
        font-size: 13px;
        line-height: 19px;
        font-weight: 600;
        position: relative;
    }

    .emailHelp {
        font-size: 13px;
    }

    button {
        background-color: #f7ca00;
        height: 30px;
        width: 312px;
        outline: none;
        border: none;
        font-size: 14px;
        border-radius: 8px;
        font-weight: 600;
        position: relative;
    }

    .login1 {
        /* position: relative; */
        width: 312;
        height: 63;
        line-height: 19px;
        font-weight: 600;
    }

    .login i {
        color: #a6a6a6;
        margin-right: 10px;
    }

    .login a {
        text-decoration: none;
        font-size: 14px;

    }

    p {
        font-size: 28px;
        font-size: 500;
    }

    .last {
        line-height: 19px;
    }

    .buy {
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .last a {
        font-size: 13px;
        font-weight: 550;

        text-decoration: none;
    }

    .last1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 30px;
        width: 350px;
        border: 1px solid #e6eaea;
        border-radius: 5px;
        text-decoration: none;
        background-color: #f7fafa;
        position: absolute;
        margin-top: 500px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .last1 p {
        font-size: 13px;
        text-decoration: none;
        color: black;
        margin-top: 12px;
        /* font-weight: 500; */
    }

    .footer {
        display: flex;
        justify-content: center;
        /* align-items: center ; */
        /* height:300px    ; */
        margin-top: 650px;
        position: absolute;
        width: 100%;
        box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
    }

    .footer a {
        font-size: 13px;
        text-decoration: none;
        /* font-weight: 520; */
        margin: 20px 10px;
    }

    .footer p {
        font-size: 13px;
        position: absolute;
        margin-top: 50px;
    }
</style>
<?php
$serverame = "localhost";
$username = "root";
$password = "";
$database = "e-commerce";
$conn = new mysqli($serverame, $username, $password, $database);
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $location = $_POST['city'] . $_POST['pincode'];
    $sql = "UPDATE signup SET location='$location',address='$address' WHERE email = '$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Location are update')</script>";
        // echo "<script>window.history.back()</script>";
        echo "<script>window.history.back()</script>";
    } else {
        echo "<script>alert('Invaild email and password')</script>";
    }
}
?>

<body>
    <div class="head">
        <h1>E-commerce</h1>
    </div>
    <div id="login_main" class="container">
        <div class="signup">
            <form method='post'>
                <p>Address Update</p>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input autocomplete="off" name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input placeholder="Enter your address" autocomplete="off" name="address" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">City</label>
                    <input placeholder="Enter your city" autocomplete="off" name="city" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pincode</label>
                    <input placeholder="Enter your pincode" autocomplete="off" name="pincode" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input autocomplete="off" name="password" required type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" name="submit">Countinue</button>
                <p class="bio">By continuing, you agree to Amazon's Conditions of Use and Privacy Notice.</p>
                <div class="login">
                    <a href="#"><i class="fa-solid fa-caret-right"></i> Need help?</a></p>
                </div>
                <hr>
                <div class="last">
                    <p class="buy">Buying for work?</p>
                    <a href="#">Shop on Amazon Busniess</a>
                </div>
            </form>

        </div>
        <div class="footer">
            <a href="#">Coundition of use</a>
            <a href="#">Privacy notice</a>
            <a href="#">Help</a>
            <p>© 1996-2024, Amazon.com, Inc. or its affiliates</p>
        </div>
    </div>

    <script>
        function validate() {
            var email = document.getElementsByName("email").value;

            if (document.getElementsByName('email') == " ") {
                // document.getElementsByName('email').style.border = "red";
                alert("Emter");
                // return false;
            }
        }
    </script>
</body>

</html>