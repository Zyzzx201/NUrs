<?php
require_once("MainClass.php");
//require_once("usertypeluClass.php");
require_once("valid.php");

$mainOBJ1 = new main();
if (isset($_POST['Savebtn'])) {
  $mainOBJ1->utype = 2;
  $mainOBJ1->status_id= 3;

  $_POST['fname'] = valid::test_input($_POST['fname']);
  $result = valid::isempty($_POST['fname']);
  $result = valid::onlyletters($_POST['fname']);
  $mainOBJ1->fname = $_POST['fname'];

  $_POST['lname'] = valid::test_input($_POST['lname']);
  $result = valid::isempty($_POST['lname']);
  $result = valid::onlyletters($_POST['lname']);
  $mainOBJ1->lname = $_POST['lname'];

  $_POST['dob'] = valid::test_input($_POST['dob']);
  $result = valid::isempty($_POST['dob']);
  $result = valid::numbersonly($_POST['dob']); //i'm not sure we should send the date in this function?
  $mainOBJ1->dob = $_POST['dob'];

  $_POST['ssn'] = valid::test_input($_POST['ssn']);
  $result = valid::isempty($_POST['ssn']);
  $result = valid::numbersonly($_POST['ssn']);
  $result = valid::verifylength($_POST['ssn'], 14, 14);
  $mainOBJ1->ssn = $_POST['ssn'];

  $mainOBJ1->insert();
  header('location:addteacher.php');
}

$mainOBJ2 = new main();
$mainOBJ3 = new main();
$mainOBJ4 = new main();
if (isset($_POST['childSave'])) {
  $mainOBJ2->utype = 2;
  $mainOBJ2->status_id= 3;
  $_POST['cfname'] = valid::test_input($_POST['cfname']);
  $result = valid::isempty($_POST['cfname']);
  $result = valid::onlyletters($_POST['cfname']);
  $mainOBJ2->fname = $_POST['cfname'];

  $_POST['clname'] = valid::test_input($_POST['clname']);
  $result = valid::isempty($_POST['clname']);
  $result = valid::onlyletters($_POST['clname']);
  $mainOBJ2->lname = $_POST['clname'];

  $_POST['ffname'] = valid::test_input($_POST['ffname']);
  $result = valid::isempty($_POST['ffname']);
  $result = valid::onlyletters($_POST['ffname']);
  $mainOBJ3->fname = $_POST['ffname'];

  $_POST['flname'] = valid::test_input($_POST['flname']);
  $result = valid::isempty($_POST['flname']);
  $result = valid::onlyletters($_POST['flname']);
  $mainOBJ3->lname = $_POST['flname'];

  $_POST['mfname'] = valid::test_input($_POST['mfname']);
  $result = valid::isempty($_POST['mfname']);
  $result = valid::onlyletters($_POST['mfname']);
  $mainOBJ4->fname = $_POST['mfname'];

  $_POST['mlname'] = valid::test_input($_POST['mlname']);
  $result = valid::isempty($_POST['mlname']);
  $result = valid::onlyletters($_POST['mlname']);
  $mainOBJ4->lname = $_POST['mlname'];

  $_POST['dob'] = valid::test_input($_POST['dob']);
  $result = valid::isempty($_POST['dob']);
  $result = valid::numbersonly($_POST['dob']);
  $mainOBJ2->dob = $_POST['dob'];

  $_POST['cssn'] = valid::test_input($_POST['cssn']);
  $result = valid::isempty($_POST['cssn']);
  $result = valid::numbersonly($_POST['cssn']);
  $result = valid::verifylength($_POST['cssn'], 14, 14);
  $mainOBJ2->ssn = $_POST['cssn'];

  $_POST['mssn'] = valid::test_input($_POST['mssn']);
  $result = valid::isempty($_POST['mssn']);
  $result = valid::numbersonly($_POST['mssn']);
  $result = valid::verifylength($_POST['mssn'], 14, 14);
  $mainOBJ3->ssn = $_POST['mssn'];

  $_POST['fssn'] = valid::test_input($_POST['fssn']);
  $result = valid::isempty($_POST['fssn']);
  $result = valid::numbersonly($_POST['fssn']);
  $result = valid::verifylength($_POST['fssn'], 14, 14);
  $mainOBJ4->ssn = $_POST['fssn'];

  $mainOBJ2->insert();
  header('location:Onlineapplication.php');
}

$mainOBJ5 = new main();
if (isset($_POST['Updatebtn'])) {
  $mainOBJ5->utype = 2;
  $mainOBJ5->status_id= 1;

  $_POST['fname'] = valid::test_input($_POST['fname']);
  $result = valid::isempty($_POST['fname']);
  $result = valid::onlyletters($_POST['fname']);
  $mainOBJ5->fname = $_POST['fname'];

  $_POST['lname'] = valid::test_input($_POST['lname']);
  $result = valid::isempty($_POST['lname']);
  $result = valid::onlyletters($_POST['lname']);
  $mainOBJ5->lname = $_POST['lname'];

  $_POST['dob'] = valid::test_input($_POST['dob']);
  $result = valid::isempty($_POST['dob']);
  $result = valid::numbersonly($_POST['dob']);
  $mainOBJ5->dob = $_POST['dob'];

  $_POST['ssn'] = valid::test_input($_POST['ssn']);
  $result = valid::isempty($_POST['ssn']);
  $result = valid::numbersonly($_POST['ssn']);
  $result = valid::verifylength($_POST['ssn'], 14, 14);
  $mainOBJ5->ssn = $_POST['ssn'];
  $mainOBJ5->update();
  header('location:editteacher.php');
}

$mainOBJ6 =  new main();
if (isset($_POST['Deletebtn'])) {
  $_POST['id'] = valid::test_input($_POST['id']);
  $result = valid::numbersonly($_POST['id']);
  $mainOBJ6->id = $_POST['id'];
  $mainOBJ6->deleteBtn();
}
if (isset($_POST['DeleteBtn'])) {
  $btnobj2 = new main();
  $btnobj2->delete();
header('location:editchild.php');
}
if (isset($_POST['teacherDelete'])) {
  $btnobj2 = new main();
  $btnobj2->delete();
  header('location:editteacher.php');
}

class mainC
{
  public function MselectV($id)
  {
    $Mobj1 = new main();
    $Mobj1->id=$id;
    $Mrow1 = $Mobj1->select();
    return $Mrow1;
  }

  public function MselectAll($id)
  {
    $SCobj1 = new main();
    $SCobj1->status_id=$id;
    $SCrow1 = $SCobj1->selectAll();
    return $SCrow1;
  }

}




 ?>
