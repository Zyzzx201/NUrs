<?php
require_once("PymentoptClass.php");

class payoptC
{
  public function POselectV($id)
  {
    $POobj1 = new payopt();
    $POobj1->id=$id;
    $POrow1 = $POobj1->select();
    return $POrow1;
  }
}

?>
