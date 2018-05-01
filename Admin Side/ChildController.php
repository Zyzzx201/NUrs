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



class ChildC
{
  public function CHselectV()
  {
    $CHobj1 = new user();
    $CHrow1 = $CHobj1->select();
    return $CHrow1;
  }

  public function CHupdateV()
  {
    $CHobj3 = new user();
    $CHrow3 = $CHobj3->update();
    return $CHrow3;
  }

  public function CHdeleteV()
  {
    $CHobj4 = new user();
    $CHrow4 = $CHobj4->delete();
    return $CHrow4;
  }
}


 ?>
