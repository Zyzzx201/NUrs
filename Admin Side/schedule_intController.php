<?php
require_once("schedule_intClass.php");

class schedule_intC
{
  public function SCIselectV()
  {
    $SCIobj1 = new Schedule_int();
    $SCIrow1 = $SCIobj1->select();
    return $SCIrow1;
  }
}

?>
