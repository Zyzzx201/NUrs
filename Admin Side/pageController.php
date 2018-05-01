<?php
require_once("pageClass.php");

$POBJ1 = new Page();
if (isset($_POST['saveP'])) {
  $POBJ1->name = $_POST['Padditional'];
  $POBJ1->name = $_POST['PaddLink'];
  $POBJ1->name = $_POST['PaddHTML'];
  $POBJ1->insert();
  header('location:EditDB.php');
}
$POBJ2 = new Page();
if (isset($_POST['updateP'])) {
  $POBJ2->id = $_POST['Pid'];
  $POBJ2->name = $_POST['Pcurrent'];
  $POBJ2->name = $_POST['PcurrentLink'];
  $POBJ2->name = $_POST['PcurrentHTML'];
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
  public function PAselectV()
  {
    $PAobj1 = new Page();
    $PArow1 = $PAobj1->select();
  }

  public function PAselectAll()
  {
    $PAobj2 = new Page();
    $PArow2 = $PAobj2->selectAll();
  }

}


 ?>
