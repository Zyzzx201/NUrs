<?php
require_once("teacherClass.php");
require_once("AddressClass.php");
require_once("MainClass.php");
require_once("nationalityClass.php");
require_once("MaritalClass.php");

$teacherOBJ2 =  new teacher();
$NatOBJ2 =  new nationality();
$addOBJ2 =  new Address();
$marrOBJ2 =  new marital();
$mainOBJ2 = new main();
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
  $teacherOBJ2->pempaddress_id = $addOBJ3->id = 3;
  $teacherOBJ2->pempnum = $_POST['pempnum'];
  $teacherOBJ2->corlsalary = $_POST['corlsalary'];
  $teacherOBJ2->othernursery = $_POST['othernursery'];
  $teacherOBJ2->povnursery = $_POST['povnursery'];
  $teacherOBJ2->insert();
  header('location:addteacher.php');
}

$teacherOBJ1 =  new teacher();
$NatOBJ1 =  new nationality();
$addOBJ1 =  new Address();
$marrOBJ1 =  new marital();
$mainOBJ1 = new main();
if (isset($_POST['Updatebtn'])) {
  $teacherOBJ1->nationality = $NatOBJ1->id;
  $teacherOBJ1->address_id = $addOBJ1->id;
  $teacherOBJ1->main_id = $mainOBJ1->id;
  $teacherOBJ1->mstatus_id = $marrOBJ1->id;
  $teacherOBJ1->acaqual1 = $_POST['acaqual1'];
  $teacherOBJ1->date_acaqual1 = $_POST['date_acaqual1'];
  /*$teacherOBJ1->acaqual2 = $_POST['acaqual2'];
  $teacherOBJ1->date_acaqual1 = $_POST['date_acaqual2'];
  $teacherOBJ1->acaqual3 = $_POST['acaqual3'];
  $teacherOBJ1->date_acaqual1 = $_POST['date_acaqual3'];
  $teacherOBJ1->acaqual4 = $_POST['acaqual4'];
  $teacherOBJ1->date_acaqual1 = $_POST['date_acaqual4'];
  $teacherOBJ1->acaqual5 = $_POST['acaqual5'];
  $teacherOBJ1->date_acaqual1 = $_POST['date_acaqual5'];*/
  $teacherOBJ1->personal_qual1 = $_POST['personal_qual1'];
  $teacherOBJ1->date_ppersonalqual1 = $_POST['date_ppersonalqual1'];
  /*$teacherOBJ1->personal_qual2 = $_POST['personal_qual2'];
  $teacherOBJ1->date_ppersonalqual1 = $_POST['date_ppersonalqual2'];
  $teacherOBJ1->personal_qual3 = $_POST['personal_qual3'];
  $teacherOBJ1->date_ppersonalqual1 = $_POST['date_ppersonalqual3'];
  $teacherOBJ1->personal_qual4 = $_POST['personal_qual4'];
  $teacherOBJ1->date_ppersonalqual1 = $_POST['date_ppersonalqual4'];
  $teacherOBJ1->personal_qual5 = $_POST['personal_qual5'];
  $teacherOBJ1->date_ppersonalqual1 = $_POST['date_ppersonalqual5'];*/
  $teacherOBJ1->pempname = $_POST['pempname'];
  $teacherOBJ1->pempaddress_id = $addOBJ3->id = 3;
  $teacherOBJ1->pempnum = $_POST['pempnum'];
  $teacherOBJ1->corlsalary = $_POST['corlsalary'];
  $teacherOBJ1->othernursery = $_POST['othernursery'];
  $teacherOBJ1->povnursery = $_POST['povnursery'];
  $teacherOBJ1->update();
  header('location:editteacher.php');
}

if (isset($_POST['teacherDelete'])) {
$btnobj3 = new teacher();
  $btnobj3->delete();
  header('location:editteacher.php');
}

class teacherC
{
  public function TselectV($id)
  {
    $Tobj1 = new teacher();
    $Tobj1->main_id=$id;
    $Trow1 = $Tobj1->select();
    return $Trow1;
  }

}


 ?>
