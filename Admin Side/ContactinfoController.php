<?php
require_once("ContactinfoClass.php");
require_once("valid.php");
//require_once("MainClass.php");

$ConOBJ1 = new contactinfo();
$mainOBJ1 = new main();
if (isset($_POST['Savebtn'])) {
  $_POST['cellphone'] = valid::test_input($_POST['cellphone']);
  $result = valid::isempty($_POST['cellphone']);
  $result = valid::numbersonly($_POST['cellphone']);
  $ConOBJ1->cellphone = $_POST['cellphone'];

  $ConOBJ1->main_id = $mainOBJ1->id;
  $ConOBJ1->insert();
  header('location:addteacher.php');
}

$ConOBJ2 = new contactinfo();
$mainOBJ1 = new main();
if (isset($_POST['Updatebtn'])) {
  $_POST['cellphone'] = valid::test_input($_POST['cellphone']);
  $result = valid::isempty($_POST['cellphone']);
  $result = valid::numbersonly($_POST['cellphone']);
  $ConOBJ2->cellphone = $_POST['cellphone'];

  $ConOBJ2->main_id = $mainOBJ1->id;
  $ConOBJ2->update();
  header('location:editteacher.php');
}

if (isset($_POST['DeleteBtn'])) {
  $btnobj4 = new contactinfo();
  $btnobj4->delete();
  header('location:editchild.php');
}
if (isset($_POST['teacherDelete'])) {
  $btnobj4 = new contactinfo();
  $btnobj4->delete();
  header('location:editteacher.php');
}
class contactinfoC
{
  public function CIselectV($id)
  {
    $CIobj1 = new contactinfo();
    $CIobj1->main_id=$id;
    $CIrow1 = $CIobj1->select();
    return $CIrow1;
  }

}


 ?>
