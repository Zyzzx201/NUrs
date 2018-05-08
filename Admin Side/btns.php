<?php
require_once("db.php");
require_once("teacherController.php");
require_once("MainController.php");

class BTN
{
  public $btnID, $AppId;
  function actionBTN($btnID)
  {
    $this->btnID=$btnID;
    $db_obj = new DB();
    $db_obj->connect();
    if ($this->btnID == 1) {
      //echo " hi i'm working";
      $sql1 = "UPDATE main SET status_id=1 WHERE id = 1 "; //'".$this->AppId."'
      $db_obj->execute($sql1); //Accept
    }
    elseif ($this->btnID == 2) {
      $sql2 = "UPDATE main SET status_id=2 WHERE id = 3"; //'".$this->AppId."'
      $result2 = $db_obj->execute($sql2); //reject
    }
    elseif ($this->btnID == 3) {
      $sql3 = "UPDATE main SET status_id=3 WHERE id = 1"; //'".$this->AppId."'
      $result3 = $db_obj->execute($sql3); //pending
    }
    $db_obj->disconnect();
  }
  //  function navBTn($btnID)
  // {
  //   $db_obj = new DB();
  //   $db_obj->connect();
  //   $t_obj= new teacherC();
  //   $t_obj->MselectV();
  //   $m_obj= new mainC();
  //   $m_obj->TselectV();
  //   $currentID= "SELECT main.id FROM main, teacher WHERE teacher.main_id=main.id";
  //   $result = $db_obj->execute($currentID);
  //   if($this->btnID == 1){
  //     $currentID= "SELECT main.id FROM main, teacher WHERE teacher.main_id=main.id+1";
  //     $result = $db_obj->execute($currentID);
  //     $t_obj= new teacherC();
  //     $t_obj->MselectV();
  //     $m_obj= new mainC();
  //     $m_obj->TselectV();
  //   }
  //   elseif ($this->btnID == 2) {
  //     $currentID= "SELECT main.id FROM main, teacher WHERE teacher.main_id=main.id-1";
  //     $result = $db_obj->execute($currentID);
  //     $t_obj2= new teacherC();
  //     $t_obj2->MselectV();
  //     $m_obj2= new mainC();
  //     $m_obj2->TselectV();
  //   }
  //   $db_obj->disconnect();
  // }
  // function deleteBtn()
  // {
  //   $db_obj = new DB();
  //   $db_obj->connect();
  //   $sql = "DELETE FROM main WHERE id = '".$this->AppId."'";
  //   $result = $db_obj->execute($sql);
  //   $db_obj->disconnect();
  // }
}



?>
