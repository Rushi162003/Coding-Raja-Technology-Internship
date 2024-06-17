<?php
error_reporting(0);
session_start();
if (!$_SESSION['auth']) {
    // header('location: ./-My-Library-\index.php');
    // echo "<script>window.location.href='./login/login.php'</script>";
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
        <link rel="stylesheet" href="login.css">
        <title>Login</title>
    </head>

    <body>
        <div class="head">
            <h1>E-commerce</h1> 
        </div>
        <div id="login_main" class="container">
            <div class="signup">
                <form action="action1.php" method='post'>
                    <p>Login</p>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input  name="password" required type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" name="login">Countinue</button>
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
                <a href="../signup.php" class="last1">
                    <p>Create your Amazon account</p>
                </a>

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
<?php
} else {
    echo "<script>alert('You have already login')</script>";
    echo "<script>window.history.back()</script>";
}
?>