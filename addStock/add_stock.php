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
    <link rel="stylesheet" href="style.css" />
    <title>E-Commerce</title>
</head>

<body>
 
    <form action="action.php" class="m-5" method="post">
        <label for="text">Title</label><br>
        <input  type="text" name="title" value=""><br>

        <label for="text">Description</label><br>
        <textarea  name="description"></textarea><br>

        <label for="text">catagory</label><br>
        <input  type="text" name="catagory"><br>

        <label for="text">product</label><br>
        <input  type="text" name="product"><br>

        <label for="text">Image</label><br>
        <input  type="text" name="image" value=""><br>

        <label for="text">Price</label><br>
        <input  type="text" name="price"><br>

        <label for="text">Rate</label><br>
        <input  type="text" name="rating"><br>

        <label for="text">color</label><br>
        <input  type="text" name="color"><br>
        <label for="text">brand</label><br>
        <input  type="text" name="brand"><br>
        <label for="text">quantity</label><br>
        <input  type="text" name="quantity"><br>

        <button name="submit" class="btn btn-outline-success" type="submit">Add to Cart</button>
    </form>

    <script src="script.js"></script>
</body>

</html>