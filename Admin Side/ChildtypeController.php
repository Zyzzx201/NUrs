<?php
require_once("ChildtypeClass.php");
require_once("valid.php");

$CTOBJ1 = new childtype();
if (isset($_POST['saveCT'])) {
  $_POST['CTadditional']=valid::test_input($_POST['CTadditional']);
  $result = valid::isempty($_POST['CTadditional']);
  $result = valid::onlyletters($_POST['CTadditional']);
  $CTOBJ1->type = $_POST['CTadditional'];

  $CTOBJ1->insert();
  header('location:EditDB.php');
}
$CTOBJ2 = new childtype();
if (isset($_POST['updateCT'])) {
  $result = valid::numbersonly($_POST['CTUid']);
  $CTOBJ2->id = $_POST['CTUid'];

  $_POST['CTnew']=valid::test_input($_POST['CTnew']);
  $result = valid::isempty($_POST['CTnew']);
  $result = valid::onlyletters($_POST['CTnew']);
  $CTOBJ2->type = $_POST['CTnew'];
  
  $CTOBJ2->update();
  header('location:EditDB.php');
}

$CTOBJ3 = new childtype();
if (isset($_POST['deleteCT'])) {
  $CTOBJ3->id = $_POST['CTid'];
  $CTOBJ3->delete();
  header('location:EditDB.php');
}

class childtypeC
{
  public function CTselectV($id)
  {
    $CTobj1 = new childtype();
    $CTobj1->id=$id;
    $CTrow1 = $CTobj1->select();
    return $CTrow1;
  }
  public function CTselectAll()
  {
    $CTobj2 = new childtype();
    $CTrow = $CTobj2->selectAll();
    return $CTrow;
  }
  public function CTselectAll2()
  {
    $CTobj2 = new childtype();
    $CTrow = $CTobj2->selectAll();
    while ($row = mysqli_fetch_assoc($CTrow)){
      echo $row['id'];
      echo " - ";
      echo $row['type'];
      echo "<br>";
   }
  }


}


 ?>
