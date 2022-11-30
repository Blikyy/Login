<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Login</title>
</head>

<body>


    <div class="form">
        <form action="login.php" method="post">
            <h1>LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="text" name="user" placeholder="Username" class="username"><br>
            <input type="password" name="pass" placeholder="Password" class="password"><br>
            <div class="btn-con">
                <button type="submit" class="btn">LOGIN</button><br>
            </div>
            <div class="register">
                <p class="register_p">No account?</p>
                <a href="register_page.php" class="register_a">register</a>
            </div>
        </form>
    </div>
</body>

</html>