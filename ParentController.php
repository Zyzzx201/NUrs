<?php
require_once("db.php");
require_once("ParentClass.php");

class parentsC
{
  public function PselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $Pobj1 = new parents();
    $Prow1 = $Pobj1->select();
    return $Prow1;
  }

  public function PinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $Pobj2 = new parents();
    $Prow2 = $Pobj2->insert();
    return $Prow2;
  }

  public function PupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $Pobj3 = new parents();
    $Prow3 = $Pobj3->update();
    return $Prow3;
  }

  public function PdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $Pobj4 = new parents();
    $Prow4 = $Pobj4->delete();
    return $Prow4;
  }
}


 ?>
