<?php
require_once("db.php");
require_once("relationClass.php");

class relationC
{
  public function RselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $Robj1 = new relation();
    $Rrow1 = $Robj1->select();
    return $Rrow1;
  }

  public function RinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $Robj2 = new relation();
    $Rrow2 = $Robj2->insert();
    return $Rrow2;
  }

  public function RupdReV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $Robj3 = new relation();
    $Rrow3 = $Robj3->updRe();
    return $Rrow3;
  }

  public function RdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $Robj4 = new relation();
    $Rrow4 = $Robj4->delete();
    return $Rrow4;
  }
}


 ?>
