<?php
require_once("pageClass.php");
require_once("valid.php");

$POBJ1 = new Page();
if (isset($_POST['saveP'])) {
  $_POST['Padditional']=valid::test_input($_POST['Padditional']);
  $result = valid::isempty($_POST['Padditional']);
  $result = valid::onlyletters($_POST['Padditional']);
  $POBJ1->friendlyname = $_POST['Padditional'];

  $_POST['PaddLink']=valid::test_input($_POST['PaddLink']);
  $result = valid::isempty($_POST['PaddLink']);
  // $result = valid::onlyletters($_POST['PaddLink']); that's a link it won't be all in letters
  $POBJ1->path = $_POST['PaddLink'];

  $_POST['PaddHTML']=valid::test_input($_POST['PaddHTML']);
  $result = valid::isempty($_POST['PaddHTML']);
  // $result = valid::onlyletters($_POST['PaddHTML']); that's code!
  $POBJ1->html = $_POST['PaddHTML'];
  
  $POBJ1->insert();
  header('location:EditDB.php');
}
$POBJ2 = new Page();
if (isset($_POST['updateP'])) {
  $_POST['PUid'] = valid::test_input($_POST['PUid']);
  $result = valid::isempty($_POST['PUid']);
  $result = valid::numbersonly($_POST['PUid']);
  $POBJ2->id = $_POST['PUid'];

  $_POST['Pnew']=valid::test_input($_POST['Pnew']);
  $result = valid::isempty($_POST['Pnew']);
  $result = valid::onlyletters($_POST['Pnew']);
  $POBJ2->friendlyname = $_POST['Pnew'];

  $_POST['PnewLink']=valid::test_input($_POST['PnewLink']);
  $result = valid::isempty($_POST['PnewLink']);
  $POBJ2->path = $_POST['PnewLink'];

  $_POST['PnewHTML']=valid::test_input($_POST['PnewHTML']);
  $result = valid::isempty($_POST['PnewHTML']);
  $POBJ2->html = $_POST['PnewHTML'];

  $POBJ2->update();
  header('location:EditDB.php');
}

$POBJ3 = new Page();
if (isset($_POST['deleteP'])) {
  $_POST['Pid'] = valid::test_input($_POST['Pid']);
  $result = valid::isempty($_POST['Pid']);
  $result = valid::numbersonly($_POST['Pid']);
  $POBJ3->id = $_POST['Pid'];
  $POBJ3->delete();
  header('location:EditDB.php');
}

class PageC
{
  public function PAselectV($id)
  {
    $PAobj1 = new Page();
    $PAobj1->id=$id;
    $PArow1 = $PAobj1->select();
    return $PArow1;
  }

  public function PAselectAll()
  {
    $PAobj2 = new Page();
    $PArow2 = $PAobj2->selectAll();
    while ($row = mysqli_fetch_assoc($PArow2)){
      echo $row['id'];
      echo " - ";
      echo $row['friendlyname'];
      echo " - ";
      echo $row['path'];
      echo "<br>";
   }
  }
}


 ?>
