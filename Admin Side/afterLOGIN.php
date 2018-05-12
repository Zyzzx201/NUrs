<?php
session_start();
require("db.php");
require_once("Encryption.php");
require_once("AdminClass.php");

$dbObj1 = new DB();
$connection = $dbObj1->connect();

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $adminOBJ = new admin();
    $passOBJ = new encrypt();
    $password = $_POST['Password'];
    $password = $passOBJ->encrypt1($password);
    $adminOBJ->username = $_POST['Username'];
    $adminOBJ->passwords = $password;
    $row = $adminOBJ->compare();
    $row1=mysqli_fetch_array($row);

  if('VALID' === $row1[0])
  {
      $_SESSION["username"]=$_POST['Username'];
      header("location:index(AS).php");
  }

  else{
      echo "<script>javascript: alert('Invalid Username or Password. Please Try Again!'); 
        window.location.href = 'adminlogin.php'; </script>";
  }

}

 ?>

