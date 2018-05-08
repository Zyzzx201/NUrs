<?php
require_once("ChildClass.php");
require_once("MainClass.php");

$ChildOBJ2 =  new user();
$mainOBJ1 = new main();
if (isset($_POST['childSave'])) {
  $ChildOBJ2->ddoe = $_POST['ddoe'];
  $ChildOBJ2->childtype = 1;
  $ChildOBJ2->main_id = $mainOBJ1->id;
  $ChildOBJ2->insert();
  header('location:Onlineapplication.php');
}
$ChildOBJ1 =  new user();
$mainOBJ2 = new main();
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

  public function CHupdateV()
  {
    $CHobj3 = new user();
    $CHrow3 = $CHobj3->update();
    return $CHrow3;
  }

}


 ?>
