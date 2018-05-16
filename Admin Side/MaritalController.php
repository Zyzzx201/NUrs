<?php
require_once("MaritalClass.php");
require_once("valid.php");

$MSOBJ1 = new marital();
if (isset($_POST['saveMS'])) {
  $_POST['MSadditional'] = valid::test_input($_POST['MSadditional']);
  $result = valid::isempty($_POST['MSadditional']);
  //$result = valid::onlyletters($_POST['MSadditional']);
  $MSOBJ1->value = $_POST['MSadditional'];
  $MSOBJ1->insert();
  header('location:EditDB.php');
}
$MSOBJ2 = new marital();
if (isset($_POST['updateMS'])) {
  $_POST['MSUid'] = valid::test_input($_POST['MSUid']);
  $result = valid::isempty($_POST['MSUid']);
  $result = valid::numbersonly($_POST['MSUid']);
  $MSOBJ2->id = $_POST['MSUid'];

  $_POST['MSnew'] = valid::test_input($_POST['MSnew']);
  $result = valid::isempty($_POST['MSnew']);
  $result = valid::onlyletters($_POST['MSnew']);
  $MSOBJ2->value = $_POST['MSnew'];
  $MSOBJ2->update();
  header('location:EditDB.php');
}

$MSOBJ3 = new marital();
if (isset($_POST['deleteMS'])) {
  $_POST['MSid'] = valid::test_input($_POST['MSid']);
  $result = valid::isempty($_POST['MSid']);
  $result = valid::numbersonly($_POST['MSid']);
  $MSOBJ3->id = $_POST['MSid'];
  $MSOBJ3->delete();
  header('location:EditDB.php');
}

$MSOBJ2 = new marital();
if (isset($_POST['updateMS'])) {
    $_POST['MSUid'] = valid::test_input($_POST['MSUid']);
    $result = valid::isempty($_POST['MSUid']);
    $result = valid::numbersonly($_POST['MSUid']);
    $MSOBJ2->id = $_POST['MSUid'];

    $_POST['MSnew'] = valid::test_input($_POST['MSnew']);
    $result = valid::isempty($_POST['MSnew']);
    $result = valid::onlyletters($_POST['MSnew']);
    $MSOBJ2->value = $_POST['MSnew'];
    $MSOBJ2->update();
    header('location:EditDB.php');
}

class maritalC
{
  public function MTselectV($id)
  {
    $MTobj1 = new marital();
    $MTobj1->id=$id;
    $MTrow1 = $MTobj1->select();
    return $MTrow1;
  }
    public function MTselectID($value)
    {
        $MTobj1 = new marital();
        $MTobj1->value=$value;
        $MTrow1 = $MTobj1->selectID();
        return $MTrow1;
    }

  public function MTselectALL()
  {
    $MTobj1 = new marital();
    $MTrow1 = $MTobj1->selectAll();
    while ($row = mysqli_fetch_assoc($MTrow1)){
      echo $row['id'];
      echo " - ";
      echo $row['value'];
      echo "<br>";
   }
  }
}


 ?>
