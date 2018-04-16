<?php
require_once("db.php");
require_once("MainClass.php");

class mainC
{
  public function MselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $Mobj1 = new main();
    $Mrow1 = $Mobj1->select();
    return $Mrow1;
  }

  public function MinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $Mobj2 = new main();
    $Mrow2 = $Mobj2->insert();
    return $Mrow2;
  }

  public function MupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $Mobj3 = new main();
    $Mrow3 = $Mobj3->update();
    return $Mrow3;
  }

  public function MdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $Mobj4 = new main();
    $Mrow4 = $Mobj4->delete();
    return $Mrow4;
  }
}


 ?>
