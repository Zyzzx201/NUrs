<?php
session_start();
require("db.php");

$dbObj1 = new DB();
$connection = $dbObj1->connect();

if($_SERVER["REQUEST_METHOD"]== "POST"){
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $sql = "SELECT username, password FROM login WHERE username = '".$this->username."'";
  $result = excute($sql);
  $row = mysqli_fetch_array($result);
  if(($username==$row["username"])&&($password==$row["password"]))
  {
      $_SESSION["username"]=$row["username"];
      $_SESSION["password"]=$row["password"];

      header("location:");  //profile page link
  }

  else{
      echo alert('Invalid Username or Password. Please Try Again!');
  }

}


 ?>
