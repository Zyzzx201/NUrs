<?php
require_once("db.php");
require_once("CoursesClass.php");

class coursesC
{
  public function COselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $COobj1 = new Courses();
    $COrow1 = $COobj1->select();
    return $COrow1;
  }

  public function COnsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $COobj2 = new Courses();
    $COrow2 = $COobj2->insert();
    return $COrow2;
  }

  public function COupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $COobj3 = new Courses();
    $COrow3 = $COobj3->update();
    return $COrow3;
  }

  public function COdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $COobj4 = new Courses();
    $COrow4 = $COobj4->delete();
    return $COrow4;
  }
}


 ?>
