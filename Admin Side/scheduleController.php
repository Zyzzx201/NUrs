<?php
require_once("scheduleClass.php");

class ScheduleC
{
  public function SCselectV($id)
  {
    $SCobj1 = new Schedule();
    $SCobj1->course_id=$id;
    $SCrow1 = $SCobj1->select();
    return $SCrow1;
  }
  public function SCselectAll($id)
  {
    $SCobj1 = new Schedule();
    $SCobj1->childtype_id=$id;
    $SCrow1 = $SCobj1->selectAll();
    return $SCrow1;
  }
}




 ?>
