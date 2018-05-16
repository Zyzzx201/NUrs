<?php
require_once("AddressClass.php");
require_once("valid.php");

$addOBJ1 = new Address();
if (isset($_POST['saveAdd'])) {
  $_POST['ADDadditional'] = valid::test_input($_POST['ADDadditional']);
  $result = valid::isempty($_POST['ADDadditional']);
  $result = valid::onlyletters($_POST['ADDadditional']);
  $addOBJ1->name = $_POST['ADDadditional'];
  $addOBJ1->parent_id = 2;
  $addOBJ1->insert();
  header('location:EditDB.php');
}

$addOBJ3 = new Address();
if (isset($_POST['deleteAdd'])) {
  $_POST['ADDid'] = valid::test_input($_POST['ADDid']);
  $result = valid::numbersonly($_POST['ADDid']);
  $addOBJ3->id = $_POST['ADDid'];

  $addOBJ3->delete();
  header('location:EditDB.php');
}

class addressC
{
  public function ADselectV($id)
  {
    $ADobj1 = new Address();
    $ADobj1->id=$id;
    $ADrow1 = $ADobj1->select();
    return $ADrow1;
  }
    public function ADselectID($name)
    {
        $ADobj1 = new Address();
        $ADobj1->name=$name;
        $ADrow1 = $ADobj1->selectID();
        return $ADrow1;
    }

  public function ADselectAll()
  {
    $ADobj2 = new Address();
    $ADrow2 = $ADobj2->selectAll();
    while ($row = mysqli_fetch_assoc($ADrow2)){
      echo $row['id'];
      echo " - ";
      echo $row['name'];
      echo "<br>";
   }
  }
}


 ?>
