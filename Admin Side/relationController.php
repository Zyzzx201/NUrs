<?php
require_once("relationClass.php");
require_once("valid.php");

$relOBJ1 = new relation();
if (isset($_POST['saveREL'])) {
 // echo "hello";
//  $_POST['RELadditional'] = valid::test_input($_POST['RELadditional']);
//  $result = valid::isempty($_POST['RELadditional']);
//  $result = valid::onlyletters($_POST['RELadditional']);
  $relOBJ1->relation = $_POST['RELadditional'];

  $relOBJ1->insert();
  header('location:EditDB.php');
}

$relOBJ2 = new relation();
if (isset($_POST['updateREL'])) {
//  $_POST['RELUid'] = valid::test_input($_POST['RELUid']);
//  $result = valid::numbersonly($_POST['RELUid']);
  $relOBJ2->id = $_POST['RELUid'];

//  $_POST['RELnew'] = valid::test_input($_POST['RELnew']);
//  $result = valid::isempty($_POST['RELnew']);
//  $result = valid::onlyletters($_POST['RELnew']);
  $relOBJ2->relation = $_POST['RELnew'];

  $relOBJ2->update();
  header('location:EditDB.php');
}
$relBJ3 = new relation();
if (isset($_POST['deleteREL'])) {
//  $_POST['RELid'] = valid::test_input($_POST['RELid']);
//  $result = valid::numbersonly($_POST['RELid']);
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
