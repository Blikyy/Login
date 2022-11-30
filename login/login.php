<?php

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$user = $_POST["user"];
$pass = $_POST["pass"];

$sql_user = "SELECT * FROM Users WHERE Username = '$user'";
$result_user = $conn->query($sql_user);

$sql_pass = "SELECT * FROM Users WHERE Password = '$pass'";
$result_pass = $conn->query($sql_pass);

$sql_hash = "SELECT Password_hash FROM Users WHERE Username='$user' AND Password='$pass'";
$result_hash = $conn->query($sql_hash);
$hash = array();
while($row = mysqli_fetch_row(($result_hash))) $hash[]=$row[0];
mysqli_free_result($result_hash);

if ($result_user->num_rows > 0) {

  if ($result_pass->num_rows > 0 && password_verify($pass,$hash[0])){

    $sql_rank = "SELECT Rank FROM Users WHERE Username='$user' AND Password='$pass'";
    $result_rank = $conn->query($sql_rank);
    $rank = array();
    while($row = mysqli_fetch_row($result_rank)) $rank[]=$row[0];
    mysqli_free_result($result_rank);

    $_SESSION["Rank"] = $rank[0];
    $_SESSION["Username"] = $user;
    $_SESSION["hash"] = $hash[0];
    header("location: logged.php");

  }
  else{
    header("location: index.php?error=Incorect Username or Password");
  }
}
else{
  header("location: index.php?error=Incorect Username or Password");
}

$conn->close();

?>