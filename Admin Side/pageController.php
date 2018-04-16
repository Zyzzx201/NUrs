<?php
require_once("db.php");
require_once("pageClass.php");

class PageC
{
  public function PAselectV()
  {
    $DBobj1 = new DB();
    $DBobj1->connect();
    $PAobj1 = new Page();
    $PArow1 = $PAobj1->select();
    return $PArow1;
  }

  public function PAinsertV()
  {
    $DBobj2 = new DB();
    $DBobj2->connect();
    $PAobj2 = new Page();
    $PArow2 = $PAobj2->insert();
    return $PArow2;
  }

  public function PAupdateV()
  {
    $DBobj3 = new DB();
    $DBobj3->connect();
    $PAobj3 = new Page();
    $PArow3 = $PAobj3->update();
    return $PArow3;
  }

  public function PAdeleteV()
  {
    $DBobj4 = new DB();
    $DBobj4->connect();
    $PAobj4 = new Page();
    $PArow4 = $PAobj4->delete();
    return $PArow4;
  }
}


 ?>
