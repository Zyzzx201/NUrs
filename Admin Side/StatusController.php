<?php
require_once("StatusClass.php");

$STATOBJ1 = new status();
if (isset($_POST['saveSTAT'])) {
  $STATOBJ1->name = $_POST['STATadditional'];
  $STATOBJ1->insert();
  header('location:EditDB.php');
}
$STATOBJ2 = new status();
if (isset($_POST['updateSTAT'])) {
  $STATOBJ2->id = $_POST['STATUid'];
  $STATOBJ2->name = $_POST['STATcurrent'];
  $STATOBJ2->update();
  header('location:EditDB.php');
}
$STATOBJ3 = new status();
if (isset($_POST['deleteSTAT'])) {
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
