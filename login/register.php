<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$user = $_POST["usrn"];
$pass = $_POST["pswrd"];
$mail = $_POST["email"];

$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO `users`(`Userscol`, `Username`, `E-mail`, `Password`, `Password_hash`, `Rank`) VALUES (NULL,'$user','$mail','$pass','$hashed_pass','Bronze')";

if ($conn->query($sql) === TRUE) {
    header("location: register_page.php?success=successly Registered");
  } 

$conn->close();
?>