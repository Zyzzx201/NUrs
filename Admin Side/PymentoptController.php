<?php
require_once("PymentoptClass.php");

class payoptC
{
  public function POselectV()
  {
    $POobj1 = new payopt();
    $POrow1 = $POobj1->select();
    return $POrow1;
  }
}

?>
