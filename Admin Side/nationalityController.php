<?php
require_once("nationalityClass.php");

$NatOBJ6 = new nationality();
if (isset($_POST['Savebtn'])) {
  $NatOBJ6->name = $_POST['nat'];
  $NatOBJ6->insert();
  header('location:addteacher.php');
}

class nationalityC
{
  public function NAselectV()
  {
    $NAobj1 = new nationality();
    $NArow1 = $NAobj1->select();
    return $NArow1;
  }

  public function NAupdateV()
  {
    $NAobj3 = new nationality();
    $NArow3 = $NAobj3->update();
    return $NArow3;
  }

  public function NAdeleteV()
  {
    $NAobj4 = new nationality();
    $NArow4 = $NAobj4->delete();
    return $NArow4;
  }
}


 ?>
