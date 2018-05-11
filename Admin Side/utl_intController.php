<?php
require_once("utl_intClass.php");
require_once("valid.php");

$UTLIOBJ1 = new utl_int();
if (isset($_POST['saveUTLI'])) {
  $_POST['UTLIUpageID'] = valid::test_input($_POST['UTLIUpageID']);
  $result = valid::isempty($_POST['UTLIUpageID']);
  $result = valid::numbersonly($_POST['UTLIUpageID']);
  $UTLIOBJ1->page_id = $_POST['UTLIUpageID'];

  $_POST['UTLIutlID'] = valid::test_input($_POST['UTLIutlID']);
  $result = valid::isempty($_POST['UTLIutlID']);
  $result = valid::numbersonly($_POST['UTLIutlID']);
  $UTLIOBJ1->utl_id = $_POST['UTLIutlID'];

  $UTLIOBJ1->insert();
  header('location:EditDB.php');
}

$UTLIOBJ3 = new utl_int();
if (isset($_POST['deleteUTLI'])) {
  $_POST['UTLIid'] = valid::test_input($_POST['UTLIid']);
  $result = valid::isempty($_POST['UTLIid']);
  $result = valid::numbersonly($_POST['UTLIid']);
  $UTLIOBJ3->id = $_POST['UTLIid'];

  $UTLIOBJ3->delete();
  header('location:EditDB.php');
}

class utl_intC
{
  public function UTIselectV($id)
  {
    $UTIobj1 = new utl_int();
    $UTIobj1->id=$id;
    $UTIrow1 = $UTIobj1->select();
    return $UTIrow1;
  }
  public function UTIselectAll()
  {
    $UTIobj2 = new utl_int();
    $UTIrow2 = $UTIobj2->selectALL();
    while ($row = mysqli_fetch_assoc($UTIrow2)){
      echo $row['id'];
      echo " - ";
      echo $row['page_id'];
      echo " - ";
      echo $row['utl_id'];
      echo "<br>";
   }
  }

}


 ?>
