<?php
require_once("CoursesClass.php");

$COBJ1 = new Courses();
if (isset($_POST['saveC'])) {
  $COBJ1->description = $_POST['Cadditional'];
  $COBJ1->insert();
  header('location:EditDB.php');
}
$COBJ2 = new Courses();
if (isset($_POST['updateC'])) {
  $COBJ2->id = $_POST['Cid'];
  $COBJ2->description = $_POST['Ccurrent'];
  $COBJ2->update();
  header('location:EditDB.php');
}

$COBJ3 = new Courses();
if (isset($_POST['deleteC'])) {
  $COBJ3->id = $_POST['Cid'];
  $COBJ3->delete();
  header('location:EditDB.php');
}

class coursesC
{
  public function COselectV()
  {
    $COobj1 = new Courses();
    $COrow1 = $COobj1->select();
  }
  public function COselectAll()
  {
    $COobj2 = new Courses();
    $COrow2 = $COobj2->selectAll();
  }
}


 ?>
