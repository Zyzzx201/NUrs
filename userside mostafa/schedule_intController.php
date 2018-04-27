<?php
require_once("db.php");
require_once("schedule_intClass.php");

class schedule_intC
{
  public function SCIselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $SCIobj1 = new Schedule_int();
    $SCIrow1 = $SCIobj1->select();
    return $SCIrow1;
  }

  public function SCIinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $SCIobj2 = new Schedule_int();
    $SCIrow2 = $SCIobj2->insert();
    return $SCIrow2;
  }

  public function SCIupdReV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $SCIobj3 = new Schedule_int();
    $SCIrow3 = $SCIobj3->updRe();
    return $SCIrow3;
  }

  public function SCIdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $SCIobj4 = new Schedule_int();
    $SCIrow4 = $SCIobj4->delete();
    return $SCIrow4;
  }
}


 ?>
