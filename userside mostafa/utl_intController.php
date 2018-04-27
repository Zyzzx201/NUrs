<?php
require_once("db.php");
require_once("utl_intClass.php");

class utl_intC
{
  public function UTIselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $UTIobj1 = new utl_int();
    $UTIrow1 = $UTIobj1->select();
    return $UTIrow1;
  }

  public function UTIinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $UTIobj2 = new utl_int();
    $UTIrow2 = $UTIobj2->insert();
    return $UTIrow2;
  }

  public function UTIupdReV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $UTIobj3 = new utl_int();
    $UTIrow3 = $UTIobj3->updRe();
    return $UTIrow3;
  }

  public function UTIdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $UTIobj4 = new utl_int();
    $UTIrow4 = $UTIobj4->delete();
    return $UTIrow4;
  }
}


 ?>
