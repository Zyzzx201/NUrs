<?php
require_once("ContactinfoClass.php");
require_once("MainClass.php");

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
if (isset($_POST['Updabtn'])) {
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

  public function CIupdateV()
  {
    $CIobj3 = new contactinfo();
    $CIrow3 = $CIobj3->update();
    return $CIrow3;
  }

  public function CIdeleteV()
  {
    $CIobj4 = new contactinfo();
    $CIrow4 = $CIobj4->delete();
    return $CIrow4;
  }
}


 ?>
