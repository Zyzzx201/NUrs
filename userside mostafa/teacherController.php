<?php
require_once("teacherClass.php");
/*require_once("AddressClass.php");
require_once("MainClass.php");
require_once("nationalityClass.php");
require_once("MaritalClass.php");*/

$teacherOBJ2 =  new teacher();

if (isset($_POST['Savebtn'])) {

  $teacherOBJ2->nationality = 2;
  $teacherOBJ2->address_id = 2;
  $teacherOBJ2->main_id = 4;
  $teacherOBJ2->mstatus_id = 3;
  $teacherOBJ2->acaqual1 = $_POST['acaqual1'];
  $teacherOBJ2->date_acaqual1 = $_POST['date_acaqual1'];
  /*$teacherOBJ2->acaqual2 = $_POST['acaqual2'];
  $teacherOBJ2->date_acaqual1 = $_POST['date_acaqual2'];
  $teacherOBJ2->acaqual3 = $_POST['acaqual3'];
  $teacherOBJ2->date_acaqual1 = $_POST['date_acaqual3'];
  $teacherOBJ2->acaqual4 = $_POST['acaqual4'];
  $teacherOBJ2->date_acaqual1 = $_POST['date_acaqual4'];
  $teacherOBJ2->acaqual5 = $_POST['acaqual5'];
  $teacherOBJ2->date_acaqual1 = $_POST['date_acaqual5'];*/
  $teacherOBJ2->personal_qual1 = $_POST['personal_qual1'];
  $teacherOBJ2->date_ppersonalqual1 = $_POST['date_ppersonalqual1'];
  /*$teacherOBJ2->personal_qual2 = $_POST['personal_qual2'];
  $teacherOBJ2->date_ppersonalqual1 = $_POST['date_ppersonalqual2'];
  $teacherOBJ2->personal_qual3 = $_POST['personal_qual3'];
  $teacherOBJ2->date_ppersonalqual1 = $_POST['date_ppersonalqual3'];
  $teacherOBJ2->personal_qual4 = $_POST['personal_qual4'];
  $teacherOBJ2->date_ppersonalqual1 = $_POST['date_ppersonalqual4'];
  $teacherOBJ2->personal_qual5 = $_POST['personal_qual5'];
  $teacherOBJ2->date_ppersonalqual1 = $_POST['date_ppersonalqual5'];*/
  $teacherOBJ2->pempname = $_POST['pempname'];
  $teacherOBJ2->pempaddress_id  = 3;
  //$addOBJ3->id =3;
  $teacherOBJ2->pempnum = $_POST['pempnum'];
  $teacherOBJ2->corsalary = $_POST['corsalary'];
  $teacherOBJ2->reqsalary = $_POST['reqsalary'];
  $teacherOBJ2->othernursery = $_POST['othernursery'];
  $teacherOBJ2->povnursery = $_POST['povnursery'];
  $teacherOBJ2->insert();
  header('location:addteacher.php');
}

class teacherC
{
  public function TselectV()
  {
    $Tobj1 = new teacher();
    $Trow1 = $Tobj1->select();
    return $Trow1;
  }

  public function TupdateV()
  {
    $Tobj3 = new teacher();
    $Trow3 = $Tobj3->update();
    return $Trow3;
  }

  public function TdeleteV()
  {
    $Tobj4 = new teacher();
    $Trow4 = $Tobj4->delete();
    return $Trow4;
  }
}


 ?>
