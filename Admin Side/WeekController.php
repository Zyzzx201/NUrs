<?php
require_once("WeekClass.php");
require_once("valid.php");

$DayBJ1 = new week();
if (isset($_POST['saveDay'])) {
  $_POST['Dayadditional'] = valid::test_input($_POST['Dayadditional']);
  $result = valid::isempty($_POST['Dayadditional']);
  $result = valid::onlyletters($_POST['Dayadditional']);
  $DayBJ1->days = $_POST['Dayadditional'];

  $DayBJ1->insert();
  header('location:EditDB.php');
}
$DayBJ2 = new week();
if (isset($_POST['updateDay'])) {
  $_POST['DayUid'] = valid::test_input($_POST['DayUid']);
  $result = valid::isempty($_POST['DayUid']);
  $result = valid::numbersonly($_POST['DayUid']);
  $DayBJ2->id = $_POST['DayUid'];

  $_POST['Daynew'] = valid::test_input($_POST['Daynew']);
  $result = valid::isempty($_POST['Daynew']);
//  $result = valid::onlyletters($_POST['Daynew']);
  $DayBJ2->days = $_POST['Daynew'];
  $DayBJ2->update();
  header('location:EditDB.php');
}

$DayBJ3 = new week();
if (isset($_POST['deleteDay'])) {
  $_POST['Dayid'] = valid::test_input($_POST['Dayid']);
  $result = valid::isempty($_POST['Dayid']);
  $result = valid::numbersonly($_POST['Dayid']);
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

    public function WselectID($days)
    {
        $Wobj1 = new week();
        $Wobj1->days=$days;
        $Wrow1 = $Wobj1->selectID();
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
