<?php
require_once("attend_intClass.php");

$ATIOBJ1 = new Attend_int();
if (isset($_POST['saveATI'])) {
  $ATIOBJ1->child_id = $_POST['ATIchild_id'];
  $ATIOBJ1->week_id = $_POST['ATIweek_id'];
  $ATIOBJ1->insert();
  header('location:EditDB.php');
}
$ATIOBJ3 = new Attend_int();
if (isset($_POST['deleteATI'])) {
  $ATIOBJ3->id = $_POST['ATIUid'];
  $ATIOBJ3->delete();
  header('location:EditDB.php');
}

class Attend_intC
{
  public function ATselectV($id)
  {
    $ATobj1 = new Attend_int();
    $ATobj1->id=$id;
    $ATrow1 = $ATobj1->select();
    return $ATrow1;
  }

  public function ATselectAll()
  {
    $ATobj1 = new Attend_int();
    $ATrow1 = $ATobj1->selectAll();
    while ($row = mysqli_fetch_assoc($ATrow1)){
      echo $row['id'];
      echo " - ";
      echo $row['child_id'];
      echo " - ";
      echo $row['week_id'];
      echo "<br>";
   }
  }

}


 ?>
