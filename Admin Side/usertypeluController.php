<?php
require_once("usertypeluClass.php");
require_once("valid.php");

$UTLBJ1 = new usertypelu();
if (isset($_POST['saveUTL'])) {
  $_POST['UTLadditional'] = valid::test_input($_POST['UTLadditional']);
  $result = valid::isempty($_POST['UTLadditional']);
  $result = valid::onlyletters($_POST['UTLadditional']);
  $UTLBJ1->usertype = $_POST['UTLadditional'];

  $UTLBJ1->insert();
  header('location:EditDB.php');
}
$UTLBJ2 = new usertypelu();
if (isset($_POST['updateUTL'])) {
  $_POST['UTLUid'] = valid::test_input($_POST['UTLUid']);
  $result = valid::isempty($_POST['UTLUid']);
  $result = valid::numbersonly($_POST['UTLUid']);
  $UTLBJ2->id = $_POST['UTLUid'];

  $_POST['UTLnew'] = valid::test_input($_POST['UTLnew']);
  $result = valid::isempty($_POST['UTLnew']);
  $result = valid::onlyletters($_POST['UTLnew']);
  $UTLBJ2->usertype = $_POST['UTLnew'];

  $UTLBJ2->update();
  header('location:EditDB.php');
}

$UTLBJ3 = new usertypelu();
if (isset($_POST['deleteUTL'])) {
  $_POST['UTLid'] = valid::test_input($_POST['UTLid']);
  $result = valid::isempty($_POST['UTLid']);
  $result = valid::numbersonly($_POST['UTLid']);
  $UTLBJ3->id = $_POST['UTLid'];

  $UTLBJ3->delete();
  header('location:EditDB.php');
}

class usertypeluC
{
  public function UTselectV($id)
  {
    $UTobj1 = new usertypelu();
    $UTobj1->id=$id;;
    $UTrow1 = $UTobj1->select();
    return $UTrow1;
  }

  public function UTselectAll()
  {
    $UTobj2 = new usertypelu();
    $UTrow2 = $UTobj2->selectALL();
    while ($row = mysqli_fetch_assoc($UTrow2)){
      echo $row['id'];
      echo " - ";
      echo $row['usertype'];
      echo "<br>";
   }
  }
}


 ?>
