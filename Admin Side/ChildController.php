<?php
require_once("ChildClass.php");
require_once("MainClass.php");
require_once("valid.php");

$ChildOBJ1 =  new main();
if (isset($_POST['childDelete'])) {
  $ChildOBJ1->delete();
  header('location:Onlineapplication(US).php');
}

class ChildC
{
  public function CHselectV($id)
  {
    $CHobj1 = new user();
    $CHobj1->main_id=$id;
    $CHrow1 = $CHobj1->select();
    return $CHrow1;
  }

    public function CHselectID($main_id)
    {
        $CHobj1 = new user();
        $CHobj1->main_id= $main_id;
        $CHrow1 = $CHobj1->selectID();
        return $CHrow1;
    }
}


 ?>
