<?php
require_once("schedule_intClass.php");

class schedule_intC
{
  public function SCIselectV($id)
  {
    $SCIobj1 = new Schedule_int();
    $SCIobj1->id=$id;
    $SCIrow1 = $SCIobj1->select();
    return $SCIrow1;
  }
}

?>
