<?php
require_once("usertypeluClass.php");

$UTLBJ1 = new usertypelu();
if (isset($_POST['saveUTL'])) {
  $UTLBJ1->usertype = $_POST['UTLadditional'];
  $UTLBJ1->insert();
  header('location:EditDB.php');
}
$UTLBJ2 = new usertypelu();
if (isset($_POST['updateUTL'])) {
  $UTLBJ2->id = $_POST['UTLid'];
  $UTLBJ2->usertype = $_POST['UTLcurrent'];
  $UTLBJ2->update();
  header('location:EditDB.php');
}

$UTLBJ3 = new usertypelu();
if (isset($_POST['deleteUTL'])) {
  $UTLBJ3->id = $_POST['UTLid'];
  $UTLBJ3->delete();
  header('location:EditDB.php');
}

class usertypeluC
{
  public function UTselectV()
  {
    $UTobj1 = new usertypelu();
    $UTrow1 = $UTobj1->select();
  }
  public function UTselectAll()
  {
    $UTobj2 = new usertypelu();
    $UTrow2 = $UTobj2->selectALL();
  }
}


 ?>
