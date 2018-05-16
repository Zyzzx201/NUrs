<?php
require_once("PaymentoptClass.php");

class payoptC
{
  public function POselectV($id)
  {
    $POobj1 = new payopt();
    $POobj1->id=$id;
    $POrow1 = $POobj1->select();
    return $POrow1;
  }
    public function POselectid($id)
    {
        $POobj2 = new payopt();
        $POobj2->payment_id=$id;
        $POrow2 = $POobj2->selectPid();
        return $POrow2;
    }
}

?>
