<?php
require_once("EmergencyClass.php");

$EROBJ2 =  new emergency();
if (isset($_POST['childSave'])) {
  $EROBJ2->main_id = $mainOBJ1->id;
  $EROBJ2->ecname = $_POST['ecname'];
  $EROBJ2->ecnum = $_POST['ecnum'];
  $EROBJ2->ecaddress_id = $_POST['ecaddress_id'];
  $EROBJ2->relation_id = $_POST['relation_id'];
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
    $ERobj1->id=$id;
    $ERrow1 = $ERobj1->select();
    return $ERrow1;
  }

}


 ?>
