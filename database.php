<?php
session_start();
// echo "<pre>";
//     print_r($_POST);
// echo "</pre>";
// die();

$servername = "localhost";
$username = "root";
$password = "";

// try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

$sql = "INSERT INTO forms (username, email, password, mobile, dob, gender, address)
  VALUES (:name, :email, :pass, :mobile, :dob, :gender, :address )";
  // use exec() because no results are returned
  
  $statement = $conn->prepare($sql);
  
  
  $statement->execute([
    ":name" => $_POST['name'],
    ":email" => $_POST['email'],
    ":pass" => $_POST['pass'],
    ":mobile" => $_POST['mobile'],
    ":dob" => $_POST['dob'],
    ":gender" => $_POST['gender'],
    ":address" => $_POST['address'],
  ]);

  echo "New record created successfully";

  header("Location:index.php");

?>