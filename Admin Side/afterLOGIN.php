<?php
session_start();
require("db.php");

$dbObj1 = new DB();
$connection = $dbObj1->connect();

if($_SERVER["REQUEST_METHOD"]== "POST"){
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $sql = "SELECT username, passwords FROM admin WHERE username = '".$_POST['Username']."'";
  $result = $dbObj1->execute($sql);
  $row = mysqli_fetch_assoc($result);
  if(($username==$row["username"])&&($password==$row["passwords"]))
  {
      $_SESSION["username"]=$row["username"];
      $_SESSION["password"]=$row["password"];

      header("location:userSide/index.php");  //profile page link
  }

  else{
      echo "Invalid Username or Password. Please Try Again!";
  }

}


 ?>
