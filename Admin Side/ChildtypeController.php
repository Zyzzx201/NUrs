<?php
require_once("db.php");
require_once("ChildtypeClass.php");

class childtypeC
{
  public function CTselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $CTobj1 = new childtype();
    $CTrow1 = $CTobj1->select();
    return $CTrow1;
  }

  public function CTinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $CTobj2 = new childtype();
    $CTrow2 = $CTobj2->insert();
    return $CTrow2;
  }

  public function CTupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $CTobj3 = new childtype();
    $CTrow3 = $CTobj3->update();
    return $CTrow3;
  }

  public function CTdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $CTobj4 = new childtype();
    $CTrow4 = $CTobj4->delete();
    return $CTrow4;
  }
}


 ?>
