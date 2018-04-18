<?php
require_once("db.php");
require_once("usertypeluClass.php");

class usertypeluC
{
  public function UTselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $UTobj1 = new usertypelu();
    $UTrow1 = $UTobj1->select();
    return $UTrow1;
  }

  public function UTinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $UTobj2 = new usertypelu();
    $UTrow2 = $UTobj2->insert();
    return $UTrow2;
  }

  public function UTupdReV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $UTobj3 = new usertypelu();
    $UTrow3 = $UTobj3->updRe();
    return $UTrow3;
  }

  public function UTdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $UTobj4 = new usertypelu();
    $UTrow4 = $UTobj4->delete();
    return $UTrow4;
  }
}


 ?>
