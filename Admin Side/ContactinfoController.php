<?php
require_once("db.php");
require_once("ContactinfoClass.php");

class contactinfoC
{
  public function CIselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $CIobj1 = new contactinfo();
    $CIrow1 = $CIobj1->select();
    return $CIrow1;
  }

  public function CIinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $CIobj2 = new contactinfo();
    $CIrow2 = $CIobj2->insert();
    return $CIrow2;
  }

  public function CIupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $CIobj3 = new contactinfo();
    $CIrow3 = $CIobj3->update();
    return $CIrow3;
  }

  public function CIdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $CIobj4 = new contactinfo();
    $CIrow4 = $CIobj4->delete();
    return $CIrow4;
  }
}


 ?>
