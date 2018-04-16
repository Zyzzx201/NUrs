<?php
require_once("db.php");
require_once("teacherClass.php");

class teacherC
{
  public function TselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $Tobj1 = new teacher();
    $Trow1 = $Tobj1->select();
    return $Trow1;
  }

  public function TinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $Tobj2 = new teacher();
    $Trow2 = $Tobj2->insert();
    return $Trow2;
  }

  public function TupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $Tobj3 = new teacher();
    $Trow3 = $Tobj3->update();
    return $Trow3;
  }

  public function TdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $Tobj4 = new teacher();
    $Trow4 = $Tobj4->delete();
    return $Trow4;
  }
}


 ?>
