<?php
require_once("scheduleClass.php");
require_once("CoursesController.php");

//$SCoBJ1 = new coursesC();
//if (isset($_POST['AddCourse'])) {
//    $SCoBJ1->InsertCourse();
//    header('location:Schedules.php');
//}
$COBJ1 = new coursesC();
if (isset($_POST['AddCourse'])) {
    $CoRow = $COBJ1->InsertCourse();
    header('location:Schedules(AS).php');

}


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
    $SCobj2 = new Schedule();
    $SCobj2->childtype_id=$id;
    $SCrow2 = $SCobj2->selectAll();
    return $SCrow2;
  }
  public function SCdisplay()
  {
     $SCobj3 = new Schedule();
     $SCrow3 = $SCobj3->display();
     return $SCrow3;
  }
}




 ?>
