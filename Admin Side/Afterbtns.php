<?php
require_once("btns.php");
require_once("MainController.php");
require_once("teacherController.php");
require_once("MaritalController.php");
require_once("ChildController.php");
require_once("ParentController.php");
require_once("ContactinfoController.php");
require_once("EmergencyController.php");

$btnobj = new BTN();
if (isset($_POST['Accept'])) {
  $btnID= $_POST['accept'];
  $btnobj->actionBTN($btnID);
  header('location:acceptteacher(AS).php');
}
if (isset($_POST['Refuse'])) {
  $btnID= $_POST['refuse'];
  $btnobj->actionBTN($btnID);
  header('location:acceptteacher(AS).php');
}
if (isset($_POST['Pending'])) {
  $btnID= $_POST['pending'];
  $btnobj->actionBTN($btnID);
  header('location:acceptteacher(AS).php');
}
$btnobj = new BTN();
if (isset($_POST['AcceptC'])) {
    $btnID= $_POST['accept'];
    $btnobj->actionBTN($btnID);
    header('location:Addusers(AS).php');
}
if (isset($_POST['RefuseC'])) {
    $btnID= $_POST['refuse'];
    $btnobj->actionBTN($btnID);
    header('location:Addusers(AS).php');
}
if (isset($_POST['PendingC'])) {
    $btnID= $_POST['pending'];
    $btnobj->actionBTN($btnID);
    header('location:Addusers(AS).php');
}



 ?>
