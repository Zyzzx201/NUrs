<?php
require_once("db.php");
require_once("ChildClass.php");

class ChildC
{
  public function CHselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $CHobj1 = new user();
    $CHrow1 = $CHobj1->select();
    return $CHrow1;
  }

  public function CHinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $CHobj2 = new user();
    $CHrow2 = $CHobj2->insert();
    return $CHrow2;
  }

  public function CHupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $CHobj3 = new user();
    $CHrow3 = $CHobj3->update();
    return $CHrow3;
  }

  public function CHdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $CHobj4 = new user();
    $CHrow4 = $CHobj4->delete();
    return $CHrow4;
  }
}


 ?>
