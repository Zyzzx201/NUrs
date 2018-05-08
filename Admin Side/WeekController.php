<?php
require_once("WeekClass.php");

$DayBJ1 = new week();
if (isset($_POST['saveDay'])) {
  $DayBJ1->days = $_POST['Dayadditional'];
  $DayBJ1->insert();
  header('location:EditDB.php');
}
$DayBJ2 = new week();
if (isset($_POST['updateDay'])) {
  $DayBJ2->id = $_POST['DayUid'];
  $DayBJ2->days = $_POST['Daycurrent'];
  $DayBJ2->update();
  header('location:EditDB.php');
}

$DayBJ3 = new week();
if (isset($_POST['deleteDay'])) {
  $DayBJ3->id = $_POST['Dayid'];
  $DayBJ3->delete();
  header('location:EditDB.php');
}

class weekC
{
  public function WselectV($id)
  {
    $Wobj1 = new week();
    $Wobj1->id=$id;
    $Wrow1 = $Wobj1->select();
    return $Wrow1;
  }

  public function WselectAll()
  {
    $Wobj1 = new week();
    $Wrow1 = $Wobj1->selectAll();
    while ($row = mysqli_fetch_assoc($Wrow1)){
      echo $row['id'];
      echo " - ";
      echo $row['days'];
      echo "<br>";
   }
  }

}


 ?>
