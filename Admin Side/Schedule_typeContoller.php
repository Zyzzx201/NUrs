<?php
require_once("db.php");
require_once("Scehdule_typeClass.php");

class scehdule_typeC
{
  public function SCTselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $SCTobj1 = new scehdule_type();
    $SCTrow1 = $SCTobj1->select();
    return $SCTrow1;
  }

  public function SCTinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $SCTobj2 = new scehdule_type();
    $SCTrow2 = $SCTobj2->insert();
    return $SCTrow2;
  }

  public function SCTupdReV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $SCTobj3 = new scehdule_type();
    $SCTrow3 = $SCTobj3->updRe();
    return $SCTrow3;
  }

  public function SCTdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $SCTobj4 = new scehdule_type();
    $SCTrow4 = $SCTobj4->delete();
    return $SCTrow4;
  }
}


 ?>
