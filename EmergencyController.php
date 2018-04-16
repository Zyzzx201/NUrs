<?php
require_once("db.php");
require_once("EmergencyClass.php");

class emergencyC
{
  public function ERselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $ERobj1 = new emergency();
    $ERrow1 = $ERobj1->select();
    return $ERrow1;
  }

  public function ERinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $ERobj2 = new emergency();
    $ERrow2 = $ERobj2->insert();
    return $ERrow2;
  }

  public function ERupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $ERobj3 = new emergency();
    $ERrow3 = $ERobj3->update();
    return $ERrow3;
  }

  public function ERdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $ERobj4 = new emergency();
    $ERrow4 = $ERobj4->delete();
    return $ERrow4;
  }
}


 ?>
