<?php
require_once("btns.php");
require_once("db.php");

$btnobj = new BTN();
$DBobj2 = new DB();
$DBobj2->connect();
if (isset($_POST['accept'])) {
  $btnID= $_POST['accept'];
  $btnobj->actionBTN($btnID);
  header('location:acceptteacher.php');
}
if (isset($_POST['Refuse'])) {
  $btnID= $_POST['refuse'];
  $btnobj->actionBTN($btnID);
  header('location:acceptteacher.php');
}
if (isset($_POST['Pending'])) {
  $btnID= $_POST['pending'];
  $btnobj->actionBTN($btnID);
  header('location:acceptteacher.php');
}
if (isset($_POST['DeleteBtn'])) {
  $btnobj2 = new BTN();
  $btnobj2->deleteBtn();
  header('location:deleteuser.php');
}

 ?>
