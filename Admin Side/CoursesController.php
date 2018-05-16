<?php
require_once("CoursesClass.php");
require_once ("scheduleClass.php");
require_once("valid.php");

$COBJ1 = new Courses();
if (isset($_POST['AddCourse'])) {
  $_POST['Courseadd'] = valid::test_input($_POST['Courseadd']);
  $result = valid::isempty($_POST['Courseadd']);
  //$result = valid::onlyletters($_POST['Courseadd']);
  $COBJ1->description = $_POST['Courseadd'];

  $COBJ1->insert();
  header('location:Schedules(AS).php');
}
elseif (isset($_POST['AddCourse'])){
    coursesC::InsertCourse();
}
$COBJ2 = new Courses();
if (isset($_POST['updateCourse'])) {
  $_POST['CourseUid'] = valid::test_input($_POST['CourseUid']);
  $result = valid::numbersonly($_POST['CourseUid']);
  $COBJ2->id = $_POST['CourseUid'];

  $_POST['Coursenew'] = valid::test_input($_POST['Coursenew']);
  $result = valid::isempty($_POST['Coursenew']);
  $result = valid::onlyletters($_POST['Coursenew']);
  $COBJ2->description = $_POST['Coursenew'];

  $COBJ2->update();
  header('location:Schedules(AS).php');
}

$COBJ3 = new Courses();
if (isset($_POST['deleteCourse'])) {
  $_POST['Courseid'] = valid::test_input($_POST['Courseid']);
  $result = valid::numbersonly($_POST['Courseid']);
  $COBJ3->id = $_POST['Courseid'];
  $COBJ3->delete();
  header('location:Schedules(AS).php');
}


class coursesC
{
  public function COselectV($id)
  {
    $COobj1 = new Courses();
    $COobj1->id=$id;
    $COrow1 = $COobj1->select();
    return $COrow1;
  }
  public function COselectAll()
  {
    $COobj2 = new Courses();
    $COrow2 = $COobj2->selectAll();
    while ($row = mysqli_fetch_assoc($COrow2)){
      echo $row['id'];
      echo " - ";
      echo $row['description'];
      echo "<br>";
   }
  }
  public function COdisplay()
  {
      $SCobj1 = new Courses();
      $SCrow1 = $SCobj1->display();
      return $SCrow1;
  }

  public function InsertCourse(){
    $Name = $_POST['Courseadd'];
    $Type = $_POST['childtype_id'];
    $StartTime = $_POST['start'];
    $EndTime = $_POST['ends'];


    $CourseObject = new Courses();
    $childtype = new childtype();
    $childtype->type=$Type;
    $child_id = $childtype->SelectID();
    $CourseObject->description = $Name;
    $CourseObject->insert();
    $ID = $CourseObject->SelectID();

    $ScheduleObject = new Schedule();
    $ScheduleObject->course_id = $ID;
    $ScheduleObject->childtype_id = $child_id;
    $ScheduleObject->start = $StartTime;
    $ScheduleObject->ends = $EndTime;
    $ScheduleObject->insert();
  }
}


 ?>
