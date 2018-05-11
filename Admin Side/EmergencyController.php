<?php
require_once("EmergencyClass.php");
require_once("valid.php");

$EROBJ2 =  new emergency();
if (isset($_POST['childSave'])) {
  $EROBJ2->main_id = $mainOBJ1->id;

  $_POST['ecname'] = valid::test_input($_POST['ecname']);
  $result = valid::isempty($_POST['ecname']);
  $result = valid::onlyletters($_POST['ecname']);
  $EROBJ2->ecname = $_POST['ecname'];

  $_POST['ecnum'] = valid::test_input($_POST['ecnum']);
  $result = valid::isempty($_POST['ecnum']);
  $result = valid::numbersonly($_POST['ecnum']);
  $result = valid::verifylength($_POST['ecnum'], 11, 11);
  $EROBJ2->ecnum = $_POST['ecnum'];

  $_POST['ecaddress_id'] = valid::test_input($_POST['ecaddress_id']);
  $result = valid::isempty($_POST['ecaddress_id']);
  $result = valid::numbersonly($_POST['ecaddress_id']);
  $EROBJ2->ecaddress_id = $_POST['ecaddress_id'];

  $_POST['relation_id'] = valid::test_input($_POST['relation_id']);
  $result = valid::isempty($_POST['relation_id']);
  $result = valid::numbersonly($_POST['relation_id']);
  $EROBJ2->relation_id = $_POST['relation_id'];

  $_POST['extrainfo'] = valid::test_input($_POST['extrainfo']);
  $result = valid::isempty($_POST['extrainfo']);
  $result = valid::onlyletters($_POST['extrainfo']);
  $result = valid::verifylength($_POST['extrainfo'], 50, 500);
  $EROBJ2->extrainfo = $_POST['extrainfo'];

  $EROBJ2->insert();
  header('location:Onlineapplication.php');
}

if (isset($_POST['DeleteBtn'])) {
  $btnobj5 = new emergency();
  $btnobj5->delete();
  header('location:editchild.php');
}

class emergencyC
{
  public function ERselectV($id)
  {
    $ERobj1 = new emergency();
    $ERobj1->main_id=$id;
    $ERrow1 = $ERobj1->select();
    return $ERrow1;
  }

}


 ?>
