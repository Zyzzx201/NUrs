<?php
require_once("pageClass.php");

$POBJ1 = new Page();
if (isset($_POST['saveP'])) {
  $POBJ1->friendlyname = $_POST['Padditional'];
  $POBJ1->path = $_POST['PaddLink'];
  $POBJ1->html = $_POST['PaddHTML'];
  $POBJ1->insert();
  header('location:EditDB.php');
}
$POBJ2 = new Page();
if (isset($_POST['updateP'])) {
  $POBJ2->id = $_POST['PUid'];
  $POBJ2->friendlyname = $_POST['Pcurrent'];
  $POBJ2->path = $_POST['PcurrentLink'];
  $POBJ2->html = $_POST['PcurrentHTML'];
  $POBJ2->update();
  header('location:EditDB.php');
}
$POBJ3 = new Page();
if (isset($_POST['deleteP'])) {
  $POBJ3->id = $_POST['Pid'];
  $POBJ3->delete();
  header('location:EditDB.php');
}

class PageC
{
  public function PAselectV($id)
  {
    $PAobj1 = new Page();
    $PAobj1->id=$id;
    $PArow1 = $PAobj1->select();
    return $PArow1;
  }

  public function PAselectAll()
  {
    $PAobj2 = new Page();
    $PArow2 = $PAobj2->selectAll();
    while ($row = mysqli_fetch_assoc($PArow2)){
      echo $row['id'];
      echo " - ";
      echo $row['friendlyname'];
      echo " - ";
      echo $row['path'];
      echo "<br>";
   }
  }
}


 ?>
