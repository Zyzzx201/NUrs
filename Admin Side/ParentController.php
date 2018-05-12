<?php
require_once("ParentClass.php");
require_once("MainClass.php");

$parentOBJ2 = new parents();
$mainOBJ1 = new main();
if (isset($_POST['childSave'])) {
  $parentOBJ2->mother_id = $mainOBJ1->id;
  $parentOBJ2->father_id = $mainOBJ1->id;
  $parentOBJ2->child_id = $mainOBJ1->id;

  $_POST['ffbook'] = valid::test_input($_POST['ffbook']);
  $result = valid::isempty($_POST['ffbook']);
  $result = valid::onlyletters($_POST['ffbook']);
  $parentOBJ2->ffbook = $_POST['ffbook'];

  $_POST['foccupation'] = valid::test_input($_POST['foccupation']);
  $result = valid::isempty($_POST['foccupation']);
  $result = valid::onlyletters($_POST['foccupation']);
  $parentOBJ2->foccupation = $_POST['foccupation'];

  $_POST['mfbook'] = valid::test_input($_POST['mfbook']);
  $result = valid::isempty($_POST['mfbook']);
  $result = valid::onlyletters($_POST['mfbook']);
  $parentOBJ2->mfbook = $_POST['mfbook'];

  $_POST['moccupation'] = valid::test_input($_POST['moccupation']);
  $result = valid::isempty($_POST['moccupation']);
  $result = valid::onlyletters($_POST['moccupation']);
  $parentOBJ2->moccupation = $_POST['moccupation'];

  $_POST['mstatus_id'] = valid::test_input($_POST['mstatus_id']);
  $result = valid::isempty($_POST['mstatus_id']);
  $result = valid::numbersonly($_POST['mstatus_id']);
  $parentOBJ2->mstatus_id = $_POST['mstatus_id'];

  $_POST['address_id'] = valid::test_input($_POST['address_id']);
  $result = valid::isempty($_POST['address_id']);
  $result = valid::numbersonly($_POST['address_id']);
  $parentOBJ2->address_id = $_POST['address_id'];

  $_POST['usualpickup'] = valid::test_input($_POST['usualpickup']);
  $result = valid::isempty($_POST['usualpickup']);
  $result = valid::onlyletters($_POST['usualpickup']);
  $parentOBJ2->usualpickup = $_POST['usualpickup'];

  $parentOBJ2->insert();
  header('location:Onlineapplication.php');
};

//if (isset($_POST['DeleteBtn'])) {
//  $btnobj3 = new user();
//  $btnobj3->delete();
//  header('location:editchild.php');
//}

class parentsC
{
  public function PselectV($id)
  {
    $Pobj1 = new parents();
    $Pobj1->id=$id;
    $Prow1 = $Pobj1->select();
    return $Prow1;
  }

}


 ?>
