<?php
require_once("scheduleClass.php");

class ScheduleC
{
  public function SCselectV()
  {
    $SCobj1 = new Schedule();
    $SCrow1 = $SCobj1->select();
    return $SCrow1;
  }
}


 ?>
