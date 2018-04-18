<?php
require_once("db.php");
require_once("scheduleClass.php");

class ScheduleC
{
  public function SCselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $SCobj1 = new Schedule();
    $SCrow1 = $SCobj1->select();
    return $SCrow1;
  }

  public function SCinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $SCobj2 = new Schedule();
    $SCrow2 = $SCobj2->insert();
    return $SCrow2;
  }

  public function SCupdReV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $SCobj3 = new Schedule();
    $SCrow3 = $SCobj3->updRe();
    return $SCrow3;
  }

  public function SCdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $SCobj4 = new Schedule();
    $SCrow4 = $SCobj4->delete();
    return $SCrow4;
  }
}


 ?>
