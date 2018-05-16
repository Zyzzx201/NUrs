<?php
require_once("PaymentClass.php");

class paymentC
{
    public function PselectV($id)
    {
        $Pobj1 = new payment();
        $Pobj1->id=$id;
        $Prow1 = $Pobj1->select();
        return $Prow1;
    }
    public function PselectAll()
    {
        $Pobj2 = new payment();
        $Prow2 = $Pobj2->selectAll();
        return $Prow2;
    }
}

?>
