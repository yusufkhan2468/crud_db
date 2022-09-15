<?php

session_start();
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";

// try {
  $pdo = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";

$sql = $pdo->prepare("DELETE FROM forms WHERE id = '$id'");
$sql->execute();
$pdo = null;

header("Location:index.php");

echo '<script>alert("Welcome For The Registration")</script>';

?>