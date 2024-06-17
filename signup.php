<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="signup.css">
    <title>Signup</title>
</head>

<body>
    <div class="head">
        <h1>E-commerce</h1>
    </div>
    <div class="container">
        <div class="signup">
            <form action="action.php" method="post">
                <p>Create Account</p>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" pattern="[/^[a-zA-Z]+ [a-zA-Z]+$/]" title="letters only"  autocomplete="off" placeholder="First and last name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"/>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" autocomplete="off"  type="email" placeholder="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                    <div class="grid-container">

                        <input type="text" disabled  placeholder="IN +91" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input name="number" title="Enter valid mobile number" autocomplete="off" pattern="[0-9]{10}"  type="text" placeholder="Mobile Number" class="form-control number" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" title="Must contain at least one number and one uppercase and lowercase letter and one spaical character, and at least 6 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" placeholder="At least 6 characters " id="exampleInputPassword1">
                    <!-- <div id="emailHelp" class="form-text">Passwords must be at least 6 characters.</div> -->
                </div>
              
                <p class="bio">To verify your number, we will send you a text message with a temporary code. Message and data rates may apply</p>
                <button type="submit" class="">Sing Up</button>
                <div class="login">
                    <p class="login1">Already have an accoutn? <a href="./login/login.php">Login <i class="fa-solid fa-caret-right"></i></a></p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="./signip.js"></script>
</body>

</html>