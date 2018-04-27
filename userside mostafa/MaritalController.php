<?php
require_once("MaritalClass.php");

class maritalC
{
  public function MTselectV()
  {
    $MTobj1 = new marital();
    $MTrow1 = $MTobj1->select();
    return $MTrow1;
  }

  public function MTupdateV()
  {
    $MTobj3 = new marital();
    $MTrow3 = $MTobj3->update();
    return $MTrow3;
  }

  public function MTdeleteV()
  {
    $MTobj4 = new marital();
    $MTrow4 = $MTobj4->delete();
    return $MTrow4;
  }
}


 ?>
