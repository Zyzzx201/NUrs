<?php
session_start();
require("db.php");
require_once("Encryption.php");
require_once("AdminClass.php");

$dbObj1 = new DB();
$connection = $dbObj1->connect();

if($_SERVER["REQUEST_METHOD"]== "POST"){
  $adminOBJ = new admin();
  $adminOBJ->username = $_POST['Username'];
  $adminOBJ->passwords = $_POST['Password'];
  $row = $adminOBJ->compare();
$row1=mysqli_fetch_array($row);

  if($row1[0] === 'VALID' )
  {
      $_SESSION["username"]=$_POST['Username'];
      header("location:index.php");


  }

  else{
      echo "<script>javascript: alert('Invalid Username or Password. Please Try Again!'); </script>";
//     header("location:adminlogin.php");
  }

}

 ?>

