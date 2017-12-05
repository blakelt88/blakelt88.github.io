<?php
include "../model/database.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = 'INSERT into users(username, email, password) VALUES ("'.$username.'","'.$email.'","'.$password.'")';

mysql_query($insert);

header("Location: ../view/login_main.php?registered=true");

?>

