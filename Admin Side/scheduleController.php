<?php
require_once("scheduleClass.php");

$SCoBJ1 = new Schedule();
if (isset($_POST['saveCourse'])) {
    $_POST['childtype_id'] = valid::test_input($_POST['childtype_id']);
    $result = valid::isempty($_POST['childtype_id']);
    $result = valid::isempty($_POST['start']);
    $result = valid::isempty($_POST['end']);
    //$result = valid::onlyletters($_POST['childtype_id']);
    $SCoBJ1->childtype_id = $_POST['childtype_id'];
    $SCoBJ1->start = $_POST['start'];
    $SCoBJ1->end = $_POST['end'];

    $SCoBJ1->insert();
    header('location:Scedules.php');
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
     $SCrow3 = $SCobj3->dispay();
     return $SCrow3;
  }
}




 ?>
