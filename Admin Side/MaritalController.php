<?php
require_once("MaritalClass.php");

$MSOBJ1 = new marital();
if (isset($_POST['saveMS'])) {
  $MSOBJ1->value = $_POST['MSadditional'];
  $MSOBJ1->insert();
  header('location:EditDB.php');
}
$MSOBJ2 = new marital();
if (isset($_POST['updateMS'])) {
  $MSOBJ2->id = $_POST['MSid'];
  $MSOBJ2->value = $_POST['MScurrent'];
  $MSOBJ2->update();
  header('location:EditDB.php');
}

$MSOBJ3 = new marital();
if (isset($_POST['deleteMS'])) {
  $MSOBJ3->id = $_POST['MSid'];
  $MSOBJ3->delete();
  header('location:EditDB.php');
}

class maritalC
{
  public function MTselectV()
  {
    $MTobj1 = new marital();
    $MTrow1 = $MTobj1->select();
    return $MTrow1;
  }

  public function MTselectALL()
  {
    $MTobj1 = new marital();
    $MTrow1 = $MTobj1->selectAll();
    return $MTrow1;
  }
}


 ?>
