<?php
require_once("db.php");
require_once("nationalityClass.php");

class nationalityC
{
  public function NAselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $NAobj1 = new nationality();
    $NArow1 = $NAobj1->select();
    return $NArow1;
  }

  public function NAinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $NAobj2 = new nationality();
    $NArow2 = $NAobj2->insert();
    return $NArow2;
  }

  public function NAupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $NAobj3 = new nationality();
    $NArow3 = $NAobj3->update();
    return $NArow3;
  }

  public function NAdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $NAobj4 = new nationality();
    $NArow4 = $NAobj4->delete();
    return $NArow4;
  }
}


 ?>
