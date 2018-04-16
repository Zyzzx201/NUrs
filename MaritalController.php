<?php
require_once("db.php");
require_once("MaritalClass.php");

class maritalC
{
  public function MTselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $MTobj1 = new marital();
    $MTrow1 = $MTobj1->select();
    return $MTrow1;
  }

  public function MTinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $MTobj2 = new marital();
    $MTrow2 = $MTobj2->insert();
    return $MTrow2;
  }

  public function MTupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $MTobj3 = new marital();
    $MTrow3 = $MTobj3->update();
    return $MTrow3;
  }

  public function MTdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $MTobj4 = new marital();
    $MTrow4 = $MTobj4->delete();
    return $MTrow4;
  }
}


 ?>
