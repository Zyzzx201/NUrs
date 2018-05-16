<?php
require_once("nationalityClass.php");
require_once("valid.php");

$NatOBJ6 = new nationality();
if (isset($_POST['Savebtn'])) {
  $_POST['nat'] = valid::test_input($_POST['nat']);
  $result = valid::isempty($_POST['nat']);
  $result = valid::onlyletters($_POST['nat']);
  $NatOBJ6->name = $_POST['nat'];
  $NatOBJ6->insert();
  header('location:addteacher.php');
}

$natOBJ1 = new nationality();
if (isset($_POST['saveNat'])) {
  $_POST['NATadditional'] = valid::test_input($_POST['NATadditional']);
  $result = valid::isempty($_POST['NATadditional']);
  $result = valid::onlyletters($_POST['NATadditional']);
  $natOBJ1->name = $_POST['NATadditional'];
  $natOBJ1->insert();
  header('location:EditDB.php');
}
$natOBJ2 = new nationality();
if (isset($_POST['updateNat'])) {
  $_POST['NATUid'] = valid::test_input($_POST['NATUid']);
  $result = valid::numbersonly($_POST['NATUid']);
  $natOBJ2->id = $_POST['NATUid'];

  $_POST['NATnew'] = valid::test_input($_POST['NATnew']);
  $result = valid::isempty($_POST['NATnew']);
  $result = valid::onlyletters($_POST['NATnew']);
  $natOBJ2->name = $_POST['NATnew'];

  $natOBJ2->update();
  header('location:EditDB.php');
}
$natOBJ3 = new nationality();
if (isset($_POST['deleteNat'])) {
  $_POST['NATid'] = valid::test_input($_POST['NATid']);
  $result = valid::numbersonly($_POST['NATid']);
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
    public function NAselectID($name)
    {
        $NAobj1 = new nationality();
        $NAobj1->name=$name;
        $NArow1 = $NAobj1->selectID();
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
