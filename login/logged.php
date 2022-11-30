<?php
session_start();
if (isset($_SESSION["Username"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/account.css">
    <title>Document</title>
</head>
<body>
    
    <div class="name-con">
    <h1 class="name">Hello 
    <?php echo $_SESSION["Username"]; ?> 
    </h1>
    </div>

    <h1 class="rank">Rank: <?php echo $_SESSION["Rank"]; ?>
    </h1>

    <a href="index.php" class="logout">Logout</a>
</body>
</html>
<?php
}
?>