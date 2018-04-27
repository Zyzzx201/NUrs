<?php
require_once("AddressClass.php");

class addressC
{
  public function ADselectV()
  {
    $ADobj1 = new Address();
    $ADrow1 = $ADobj1->select();
    return $ADrow1;
  }

  public function ADupdateV()
  {
    $ADobj3 = new Address();
    $ADrow3 = $ADobj3->update();
    return $ADrow3;
  }

  public function ADdeleteV()
  {
    $ADobj4 = new Address();
    $ADrow4 = $ADobj4->delete();
    return $ADrow4;
  }
}


 ?>
