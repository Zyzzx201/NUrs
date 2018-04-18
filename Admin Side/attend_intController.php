<?php
require_once("db.php");
require_once("attend_intClass.php");

class Attend_intC
{
  public function ATselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $ATobj1 = new Attend_int();
    $ATrow1 = $ATobj1->select();
    return $ATrow1;
  }

  public function ATinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $ATobj2 = new Attend_int();
    $ATrow2 = $ATobj2->insert();
    return $ATrow2;
  }

  public function ATupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $ATobj3 = new Attend_int();
    $ATrow3 = $ATobj3->update();
    return $ATrow3;
  }

  public function ATdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $ATobj4 = new Attend_int();
    $ATrow4 = $ATobj4->delete();
    return $ATrow4;
  }
}


 ?>
