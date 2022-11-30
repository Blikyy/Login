<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/reginster.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php" class="back"><- Back</a>
    <form action="register.php" method="post" class="form">
        <h1>Register</h1>
        <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p> 
        <?php } ?>
        <input type="text" name="usrn" placeholder="Username" class="input" required><br>
        <input type="password" name="pswrd" placeholder="Password" class="input" required><br>
        <input type="email" name="email" placeholder="E-mail" class="input" required><br>
        <div class="btn-con">
        <button type="submit" class="btn">OK</button>
        </div>
        



    </form>
</body>
</html>