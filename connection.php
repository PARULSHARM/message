<?php

$user = 'root';
$pass = 'root';
$db = 'userinfo';
$host = 'localhost';
$port = 3306;
$link = mysqli_init();
$conn = mysqli_connect('localhost', $user, $pass, $db);
mysqli_select_db($conn, $db);
if(!$conn){
  die('task failed');
}
?>
