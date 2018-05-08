<?php
require_once("utl_intClass.php");

$UTLIOBJ1 = new utl_int();
if (isset($_POST['saveUTLI'])) {
  $UTLIOBJ1->page_id = $_POST['UTLIpageID'];
  $UTLIOBJ1->utl_id = $_POST['UTLIutlID'];
  $UTLIOBJ1->insert();
  header('location:EditDB.php');
}
$UTLIOBJ2 = new utl_int();
if (isset($_POST['updateUTLI'])) {
  $UTLIOBJ2->id = $_POST['UTLIid'];
  $UTLIOBJ2->page_id = $_POST['UTLIpageID'];
  $UTLIOBJ2->utl_id = $_POST['UTLIutlID'];
  $UTLIOBJ2->update();
  header('location:EditDB.php');
}

$UTLIOBJ3 = new utl_int();
if (isset($_POST['deleteUTL'])) {
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
