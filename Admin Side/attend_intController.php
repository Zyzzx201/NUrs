<?php
require_once("attend_intClass.php");
require_once("WeekController.php");
require_once("valid.php");

$ATIOBJ1 = new Attend_int();
if (isset($_POST['saveATI'])) {
  $_POST['ATIweek_id'] = valid::test_input($_POST['ATIweek_id']);
  $result = valid::isempty($_POST['ATIweek_id']);
  $result = valid::numbersonly($_POST['ATIweek_id']);
  $ATIOBJ1->week_id = $_POST['ATIweek_id'];

  $_POST['ATIchild_id'] = valid::test_input($_POST['ATIchild_id']);
  $result = valid::isempty($_POST['ATIchild_id']);
  $result = valid::numbersonly($_POST['ATIchild_id']);
  $ATIOBJ1->child_id = $_POST['ATIchild_id'];

  $ATIOBJ1->insert();
  header('location:EditDB.php');
}
$ATIOBJ3 = new Attend_int();
if (isset($_POST['deleteATI'])) {
  $_POST['ATIUid'] = valid::test_input($_POST['ATIUid']);
  $result = valid::numbersonly($_POST['ATIUid']);
  $ATIOBJ3->id = $_POST['ATIUid'];
  $ATIOBJ3->delete();
  header('location:EditDB.php');
}

class Attend_intC
{
  public function ATselectV($id)
  {
    $ATobj1 = new Attend_int();
    $ATobj1->child_id=$id;
    $ATrow1 = $ATobj1->selectALL();
    $week = new weekC();
    foreach ($ATrow1 as $weekId){
        $weekRow = $week->WselectV($weekId['week_id']);
        foreach ($weekRow as $result)
            if ($weekId['week_id'] == $result['id'])
                return $result['days'];
    }

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
