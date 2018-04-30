<?php
require_once("MainClass.php");
//require_once("usertypeluClass.php");

$mainOBJ1 = new main();
if (isset($_POST['Savebtn'])) {
  $mainOBJ1->utype = 2;
  $mainOBJ1->status_id= 3;
  $mainOBJ1->fname = $_POST['fname'];
  $mainOBJ1->lname = $_POST['lname'];
  $mainOBJ1->dob = $_POST['dob'];
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
  $mainOBJ2->fname = $_POST['cfname'];
  $mainOBJ2->lname = $_POST['clname'];
  $mainOBJ3->fname = $_POST['ffname'];
  $mainOBJ3->lname = $_POST['flname'];
  $mainOBJ4->fname = $_POST['mfname'];
  $mainOBJ4->lname = $_POST['mlname'];
  $mainOBJ2->dob = $_POST['dob'];
  $mainOBJ2->ssn = $_POST['cssn'];
  $mainOBJ3->ssn = $_POST['mssn'];
  $mainOBJ4->ssn = $_POST['fssn'];
  $mainOBJ2->insert();
  header('location:Onlineapplication.php');
}

$mainOBJ5 = new main();
if (isset($_POST['Updatebtn'])) {
  $mainOBJ5->utype = 2;
  $mainOBJ5->status_id= 1;
  $mainOBJ5->fname = $_POST['fname'];
  $mainOBJ5->lname = $_POST['lname'];
  $mainOBJ5->dob = $_POST['dob'];
  $mainOBJ5->ssn = $_POST['ssn'];
  $mainOBJ5->update();
  header('location:editteacher.php');
}

class mainC
{
  public $fname;
  public $lname;
  public $dob;
  public function MselectV()
  {
    $Mobj1 = new main();
    $Mrow1 = $Mobj1->select();
    return $Mrow1;
  }

  public function MupdateV()
  {
    $Mobj3 = new main();
    $Mrow3 = $Mobj3->update();
    return $Mrow3;
  }

  public function MdeleteV()
  {
    $Mobj4 = new main();
    $Mrow4 = $Mobj4->delete();
    return $Mrow4;
  }
}




 ?>
