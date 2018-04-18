<?php
require_once("db.php");
require_once("appstatusluClass.php");

class AppstatusluC
{
  public function APselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $APobj1 = new Appstatuslu();
    $AProw1 = $APobj1->select();
    return $AProw1;
  }

  public function APinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $APobj2 = new Appstatuslu();
    $AProw2 = $APobj2->insert();
    return $AProw2;
  }

  public function APupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $APobj3 = new Appstatuslu();
    $AProw3 = $APobj3->update();
    return $AProw3;
  }

  public function APdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $APobj4 = new Appstatuslu();
    $AProw4 = $APobj4->delete();
    return $AProw4;
  }
}


 ?>
