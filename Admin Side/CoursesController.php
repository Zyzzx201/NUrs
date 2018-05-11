<?php
require_once("CoursesClass.php");
require_once("valid.php");

$COBJ1 = new Courses();
if (isset($_POST['saveCourse'])) {
  $_POST['Courseadd'] = valid::test_input($_POST['Courseadd']);
  $result = valid::isempty($_POST['Courseadd']);
  $result = valid::onlyletters($_POST['Courseadd']);
  $COBJ1->description = $_POST['Courseadd'];
  
  $COBJ1->insert();
  header('location:Scedules.php');
}
$COBJ2 = new Courses();
if (isset($_POST['updateC'])) {
  $_POST['CUid'] = valid::test_input($_POST['CUid']);
  $result = valid::numbersonly($_POST['CUid']);
  $COBJ2->id = $_POST['CUid'];

  $_POST['Cnew'] = valid::test_input($_POST['Cnew']);
  $result = valid::isempty($_POST['Cnew']);
  $result = valid::onlyletters($_POST['Cnew']);
  $COBJ2->description = $_POST['Cnew'];

  $COBJ2->update();
  header('location:Scedules.php');
}

$COBJ3 = new Courses();
if (isset($_POST['deleteC'])) {
  $_POST['Cid'] = valid::test_input($_POST['Cid']);
  $result = valid::numbersonly($_POST['Cid']);
  $COBJ3->id = $_POST['Cid'];
  $COBJ3->delete();
  header('location:Scedules.php');
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
        $SCrow1 = $SCobj1->dispay();
        return $SCrow1;
    }
}


 ?>
