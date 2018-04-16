<?php
require_once("db.php");
require_once("AddressClass.php");

class addressC
{
  public function ADselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $ADobj1 = new Address();
    $ADrow1 = $ADobj1->select();
    return $ADrow1;
  }

  public function ADinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $ADobj2 = new Address();
    $ADrow2 = $ADobj2->insert();
    return $ADrow2;
  }

  public function ADupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $ADobj3 = new Address();
    $ADrow3 = $ADobj3->update();
    return $ADrow3;
  }

  public function ADdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $ADobj4 = new Address();
    $ADrow4 = $ADobj4->delete();
    return $ADrow4;
  }
}


 ?>
