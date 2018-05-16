<?php
require_once("EmergencyClass.php");
require_once("valid.php");


class emergencyC
{
  public function ERselectV($id)
  {
    $ERobj1 = new emergency();
    $ERobj1->main_id=$id;
    $ERrow1 = $ERobj1->select();
    return $ERrow1;
  }

}


 ?>
