<?php
require_once("AddressClass.php");

$addOBJ1 = new Address();
if (isset($_POST['saveAdd'])) {
  $addOBJ1->name = $_POST['ADDadditional'];
  $addOBJ1->parent_id = 2;
  $addOBJ1->insert();
  header('location:EditDB.php');
}

$addOBJ3 = new Address();
if (isset($_POST['deleteAdd'])) {
  $addOBJ3->id = $_POST['ADDid'];
  $addOBJ3->delete();
  header('location:EditDB.php');
}

class addressC
{
  public function ADselectV()
  {
    $ADobj1 = new Address();
    $ADrow1 = $ADobj1->select();
    return $ADrow1;
  }
  public function ADselectAll()
  {
    $ADobj2 = new Address();
    $ADrow2 = $ADobj2->selectAll();
  }
}


 ?>
