<?php
require_once("StatusClass.php");
require_once("valid.php");

$STATOBJ1 = new status();
if (isset($_POST['saveSTAT'])) {
  $_POST['STATadditional'] = valid::test_input($_POST['STATadditional']);
  $result = valid::isempty($_POST['STATadditional']);
  $result = valid::onlyletters($_POST['STATadditional']);
  $STATOBJ1->name = $_POST['STATadditional'];

  $STATOBJ1->insert();
  header('location:EditDB.php');
}
$STATOBJ2 = new status();
if (isset($_POST['updateSTAT'])) {
  $_POST['STATUid'] = valid::test_input($_POST['STATUid']);
  $result = valid::isempty($_POST['STATUid']);
  $result = valid::numbersonly($_POST['STATUid']);
  $STATOBJ2->id = $_POST['STATUid'];

  $_POST['STATnew'] = valid::test_input($_POST['STATnew']);
  $result = valid::isempty($_POST['STATnew']);
  $result = valid::onlyletters($_POST['STATnew']);
  $STATOBJ2->name = $_POST['STATnew'];

  $STATOBJ2->update();
  header('location:EditDB.php');
}
$STATOBJ3 = new status();
if (isset($_POST['deleteSTAT'])) {
  $_POST['STATid'] = valid::test_input($_POST['STATid']);
  $result = valid::isempty($_POST['STATid']);
  $result = valid::numbersonly($_POST['STATid']);
  $STATOBJ3->id = $_POST['STATid'];
  $STATOBJ3->delete();
  header('location:EditDB.php');
}

class statusC
{
  public function SselectV($id)
  {
    $Sobj1 = new status();
    $Sobj1->id=$id;
    $Srow1 = $Sobj1->select();
    return $Srow1;
  }

  public function SselectAll()
  {
    $Sobj1 = new status();
    $Srow1 = $Sobj1->selectAll();
    while ($row = mysqli_fetch_assoc($Srow1)){
      echo $row['id'];
      echo " - ";
      echo $row['name'];
      echo "<br>";
   }
  }


}


 ?>
