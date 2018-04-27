<?php
require_once("db.php");
require_once("WeekClass.php");

class weekC
{
  public function WselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $Wobj1 = new week();
    $Wrow1 = $Wobj1->select();
    return $Wrow1;
  }

  /*public function WinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $Wobj2 = new week();
    $Wrow2 = $Wobj2->insert();
    return $Wrow2;
  }

  public function WupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $Wobj3 = new week();
    $Wrow3 = $Wobj3->update();
    return $Wrow3;
  }

  public function WdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $Wobj4 = new week();
    $Wrow4 = $Wobj4->delete();
    return $Wrow4;
  }*/
}


 ?>
