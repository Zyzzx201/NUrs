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

class emergencyC
{
  public function ERselectV()
  {
    $ERobj1 = new emergency();
    $ERrow1 = $ERobj1->select();
    return $ERrow1;
  }

  public function ERupdateV()
  {
    $ERobj3 = new emergency();
    $ERrow3 = $ERobj3->update();
    return $ERrow3;
  }

  public function ERdeleteV()
  {
    $ERobj4 = new emergency();
    $ERrow4 = $ERobj4->delete();
    return $ERrow4;
  }
}


 ?>
