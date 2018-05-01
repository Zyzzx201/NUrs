<?php
require_once("ContactinfoClass.php");
//require_once("MainClass.php");

$ConOBJ1 = new contactinfo();
//$mainOBJ1 = new main();
if (isset($_POST['Savebtn'])) {
  $ConOBJ1->cellphone = $_POST['cellphone'];
  $ConOBJ1->main_id = 4;
  $ConOBJ1->insert();
  header('location:addteacher.php');
}

$ConOBJ2 = new contactinfo();
$mainOBJ1 = new main();
if (isset($_POST['Updatebtn'])) {
  $ConOBJ2->cellphone = $_POST['cellphone'];
  $ConOBJ2->main_id = $mainOBJ1->id;
  $ConOBJ2->update();
  header('location:editteacher.php');
}

class contactinfoC
{
  public function CIselectV()
  {
    $CIobj1 = new contactinfo();
    $CIrow1 = $CIobj1->select();
    return $CIrow1;
  }

}


 ?>
