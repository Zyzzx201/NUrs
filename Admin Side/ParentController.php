<?php
require_once("ParentClass.php");
require_once("MainClass.php");

$parentOBJ2 = new parents();
$mainOBJ1 = new main();
if (isset($_POST['childSave'])) {
  $parentOBJ2->mother_id = $mainOBJ1->id;
  $parentOBJ2->father_id = $mainOBJ1->id;
  $parentOBJ2->child_id = $mainOBJ1->id;
  $parentOBJ2->ffbook = $_POST['ffbook'];
  $parentOBJ2->foccupation = $_POST['foccupation'];
  $parentOBJ2->mfbook = $_POST['mfbook'];
  $parentOBJ2->moccupation = $_POST['moccupation'];
  $parentOBJ2->mstatus_id = $_POST['mstatus_id'];
  $parentOBJ2->address_id = $_POST['address_id'];
  $parentOBJ2->usualpickup = $_POST['usualpickup'];
  $parentOBJ2->insert();
  header('location:Onlineapplication.php');
};

if (isset($_POST['DeleteBtn'])) {
  $btnobj3 = new parents();
  $btnobj3->delete();
  header('location:editchild.php');
}

class parentsC
{
  public function PselectV()
  {
    $Pobj1 = new parents();
    $Prow1 = $Pobj1->select();
    return $Prow1;
  }

}


 ?>
