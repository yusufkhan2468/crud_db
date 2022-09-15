<?php
session_start();

$id = $_POST['id'];


$servername = "localhost";
$username = "root";
$password = "";

  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";

// $sql = "UPDATE forms SET(username, email, password, mobile, dob, gender, address)
//   VALUES (:name, :email, :pass, :mobile, :dob, :gender, :address ) WHERE id='$id'";
$sql = "UPDATE forms SET username=:name, email=:email, password=:pass, mobile=:mobile, dob=:dob, gender=:gender, address=:address WHERE id =:id";
  // use exec() because no results are returned
  
  $st = $conn->prepare($sql);
  
  
  $st->execute([ 
    ":name" => $_POST['name'],
    ":email" => $_POST['email'],
    ":pass" => $_POST['pass'],
    ":mobile" => $_POST['mobile'],
    ":dob" => $_POST['dob'],
    ":gender" => $_POST['gender'],
    ":address" => $_POST['address'],
    ":id" => $id,
  ]);

//   echo "New record created successfully";

  header("Location:index.php");

?>