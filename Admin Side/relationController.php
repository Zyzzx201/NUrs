<?php
require_once("relationClass.php");

$relOBJ1 = new relation();
if (isset($_POST['saveREL'])) {
  $relOBJ1->relation = $_POST['RELadditional'];
  $relOBJ1->insert();
  header('location:EditDB.php');
}

$relOBJ2 = new relation();
if (isset($_POST['updateREL'])) {
  $relOBJ2->id = $_POST['RELUid'];
  $relOBJ2->relation = $_POST['RELcurrent'];
  $relOBJ2->update();
  header('location:EditDB.php');
}
$relBJ3 = new relation();
if (isset($_POST['deleteREL'])) {
  $relBJ3->id = $_POST['RELid'];
  $relBJ3->delete();
  header('location:EditDB.php');
}

class relationC
{
  public function RselectV($id)
  {
    $Robj1 = new relation();
    $Robj1->id=$id;
    $Rrow1 = $Robj1->select();
    return $Rrow1;
  }
  public function RselectALL()
  {
    $Robj1 = new relation();
    $Rrow1 = $Robj1->selectALL();
    while ($row = mysqli_fetch_assoc($Rrow1)){
      echo $row['id'];
      echo " - ";
      echo $row['relation'];
      echo "<br>";
   }
  }

}


 ?>
