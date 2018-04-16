<?php
require_once("db.php");
require_once("StatusClass.php");

class statusC
{
  public function SselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $Sobj1 = new status();
    $Srow1 = $Sobj1->select();
    return $Srow1;
  }

  public function SinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $Sobj2 = new status();
    $Srow2 = $Sobj2->insert();
    return $Srow2;
  }

  public function SupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $Sobj3 = new status();
    $Srow3 = $Sobj3->update();
    return $Srow3;
  }

  public function SdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $Sobj4 = new status();
    $Srow4 = $Sobj4->delete();
    return $Srow4;
  }
}


 ?>
