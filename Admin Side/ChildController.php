<?php
require_once("ChildClass.php");
require_once("MainClass.php");
require_once("valid.php");

$ChildOBJ2 =  new user();
$mainOBJ1 = new main();
if (isset($_POST['childSave'])) {
  $_POST['ddoe']=valid::test_input($_POST['ddoe']);
  $result = valid::isempty($_POST['ddoe']);
  $result = valid::numbersonly($_POST['ddoe']);
  $ChildOBJ2->ddoe = $_POST['ddoe'];
  $ChildOBJ2->childtype = 1;
  $ChildOBJ2->main_id = $mainOBJ1->id;
  $ChildOBJ2->insert();
  header('location:Onlineapplication.php');
}
$ChildOBJ1 =  new user();
if (isset($_POST['childDelete'])) {
  $ChildOBJ2->delete();
  header('location:Onlineapplication.php');
}

class ChildC
{
  public function CHselectV($id)
  {
    $CHobj1 = new user();
    $CHobj1->id=$id;
    $CHrow1 = $CHobj1->select();
    return $CHrow1;
  }

}


 ?>
