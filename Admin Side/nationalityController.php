<?php
require_once("nationalityClass.php");

$NatOBJ6 = new nationality();
if (isset($_POST['Savebtn'])) {
  $NatOBJ6->name = $_POST['nat'];
  $NatOBJ6->insert();
  header('location:addteacher.php');
}

$natOBJ1 = new nationality();
if (isset($_POST['saveNat'])) {
  $natOBJ1->name = $_POST['NATadditional'];
  $natOBJ1->insert();
  header('location:EditDB.php');
}
$natOBJ2 = new nationality();
if (isset($_POST['updateNat'])) {
  $natOBJ2->id = $_POST['NATUid'];
  $natOBJ2->name = $_POST['NATcurrent'];
  $natOBJ2->update();
  header('location:EditDB.php');
}
$natOBJ3 = new nationality();
if (isset($_POST['deleteNat'])) {
  $natOBJ3->id = $_POST['NATid'];
  $natOBJ3->delete();
  header('location:EditDB.php');
}

class nationalityC
{
  public function NAselectV($id)
  {
    $NAobj1 = new nationality();
    $NAobj1->id=$id;
    $NArow1 = $NAobj1->select();
    return $NArow1;
  }

  public function NAselectALL()
  {
    $NAobj2 = new nationality();
    $NArow2 = $NAobj2->selectAll();
    while ($row = mysqli_fetch_assoc($NArow2)){
      echo $row['id'];
      echo " - ";
      echo $row['name'];
      echo "<br>";
   }
  }

}


 ?>
