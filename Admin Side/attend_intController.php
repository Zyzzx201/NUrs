<?php
require_once("attend_intClass.php");

$ATIOBJ1 = new Attend_int();
if (isset($_POST['saveATI'])) {
  $ATIOBJ1->child_id = $_POST['ATIchild_id'];
  $ATIOBJ1->week_id = $_POST['ATIweek_id'];
  $ATIOBJ1->insert();
  header('location:EditDB.php');
}
$ATIOBJ2 = new Attend_int();
if (isset($_POST['updateATI'])) {
  $ATIOBJ2->id = $_POST['ATIid'];
  $ATIOBJ2->child_id = $_POST['ATIchild_id'];
  $ATIOBJ2->week_id = $_POST['ATIweek_id'];
  $ATIOBJ2->update();
  header('location:EditDB.php');
}

$ATIOBJ3 = new Attend_int();
if (isset($_POST['deleteATI'])) {
  $ATIOBJ3->id = $_POST['ATIid'];
  $ATIOBJ3->delete();
  header('location:EditDB.php');
}

class Attend_intC
{
  public function ATselectV()
  {
    $ATobj1 = new Attend_int();
    $ATrow1 = $ATobj1->select();
  }
  public function ATselectAll()
  {
    $ATobj1 = new Attend_int();
    $ATrow1 = $ATobj1->selectAll();
  }

}


 ?>
