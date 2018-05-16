<?php
require_once("teacherClass.php");
require_once("AddressClass.php");
require_once("MainClass.php");
require_once("nationalityClass.php");
require_once("MaritalClass.php");
require_once("valid.php");
require_once("MainController.php");


$teacherOBJ2 =  new teacher();
$NatOBJ2 =  new nationality();
$addOBJ2 =  new Address();
$marrOBJ2 =  new marital();
$mainOBJ2 = new main();
if (isset($_POST['Savebtn'])) {
//  $teacherOBJ2->nationality = 2;
  $teacherOBJ2->address_id = 2;
//  $teacherOBJ2->main_id = 4;
//  $teacherOBJ2->mstatus_id = 3;


  $_POST['pempname'] = valid::test_input($_POST['pempname']);
  $result = valid::isempty($_POST['pempname']);
  $result = valid::onlyletters($_POST['pempname']);
  $teacherOBJ2->pempname = $_POST['pempname'];

  $teacherOBJ2->pempaddress_id = $addOBJ3->id;

  $_POST['pempnum'] = valid::test_input($_POST['pempnum']);
  $result = valid::isempty($_POST['pempnum']);
  $result = valid::numbersonly($_POST['pempnum']);
  $result = valid::verifylength($_POST['pempnum'], 11, 11);
  $teacherOBJ2->pempnum = $_POST['pempnum'];

  $_POST['corlsalary'] = valid::test_input($_POST['corlsalary']);
  $result = valid::isempty($_POST['corlsalary']);
  $result = valid::numbersonly($_POST['corlsalary']);
  $result = valid::verifylength($_POST['corlsalary'], 5, 5);
  $teacherOBJ2->corlsalary = $_POST['corlsalary'];

  $_POST['othernursery'] = valid::test_input($_POST['othernursery']);
  $result = valid::isempty($_POST['othernursery']);
  $result = valid::onlyletters($_POST['othernursery']);
  $result = valid::verifylength($_POST['othernursery'], 50, 500);
  $teacherOBJ2->othernursery = $_POST['othernursery'];

  $_POST['povnursery'] = valid::test_input($_POST['povnursery']);
  $result = valid::isempty($_POST['povnursery']);
  $result = valid::onlyletters($_POST['povnursery']);
  $result = valid::verifylength($_POST['povnursery'], 50, 500);
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

  $_POST['pempname'] = valid::test_input($_POST['pempname']);
  $result = valid::isempty($_POST['pempname']);
  $result = valid::onlyletters($_POST['pempname']);
  $teacherOBJ1->pempname = $_POST['pempname'];

  $teacherOBJ1->pempaddress_id = $addOBJ3->id;

  $_POST['pempnum'] = valid::test_input($_POST['pempnum']);
  $result = valid::isempty($_POST['pempnum']);
  $result = valid::numbersonly($_POST['pempnum']);
  $result = valid::verifylength($_POST['pempnum'], 11, 11);
  $teacherOBJ1->pempnum = $_POST['pempnum'];

  $_POST['corlsalary'] = valid::test_input($_POST['corlsalary']);
  $result = valid::isempty($_POST['corlsalary']);
  $result = valid::numbersonly($_POST['corlsalary']);
  $result = valid::verifylength($_POST['corlsalary'], 5, 5);
  $teacherOBJ1->corlsalary = $_POST['corlsalary'];

  $_POST['othernursery'] = valid::test_input($_POST['othernursery']);
  $result = valid::isempty($_POST['othernursery']);
  $result = valid::onlyletters($_POST['othernursery']);
  $result = valid::verifylength($_POST['othernursery'], 50, 500);
  $teacherOBJ1->othernursery = $_POST['othernursery'];

  $_POST['povnursery'] = valid::test_input($_POST['povnursery']);
  $result = valid::isempty($_POST['povnursery']);
  $result = valid::onlyletters($_POST['povnursery']);
  $result = valid::verifylength($_POST['povnursery'], 50, 500);
  $teacherOBJ1->povnursery = $_POST['povnursery'];

  $teacherOBJ1->update();
  header('location:editteacher.php');
}
$mainOBJ1 = new main();
if (isset($_POST['teacherDelete'])) {
$mainOBJ1 = new main();
  $mainOBJ1->delete();
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
    public function TselectID($main_id)
    {
        $Tobj1 = new teacher();
        $Tobj1->main_id = $main_id;
        $Trow1 = $Tobj1->selectID();
        return $Trow1;
    }

}


 ?>
