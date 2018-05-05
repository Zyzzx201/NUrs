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

if (isset($_POST['previousAC'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(1);
  header('location:acceptteacher.php');
}
if (isset($_POST['nextAC'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(2);
  header('location:acceptteacher.php');
}
if (isset($_POST['previousDU'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(1);
  header('location:editchild.php');
}
if (isset($_POST['nextDU'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(2);
  header('location:editchild.php');
}
if (isset($_POST['previousET'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(1);
  header('location:editteacher.php');
}
if (isset($_POST['nextET'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(2);
  header('location:editteacher.php');
}
if (isset($_POST['previousAU'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(1);
  header('location:Addusers.php');
}
if (isset($_POST['nextAU'])) {
  $btnobj2 = new BTN();
  $btnobj2->navBTn(2);
  header('location:Addusers.php');
}


 ?>
