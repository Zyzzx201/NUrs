<?php
require_once("db.php");
require_once("teacherClass.php");
require_once("MainClass.php");

  class BTN
  {
    private $btnID, $AppId;
    public function actionBTN($btnID)
    {
      $db_obj = new DB();
      $db_obj->connect();
      if ($this->btnID == 1) {
        $sql1 = "UPDATE main SET status_id=1 WHERE id = 1 "; //'".$this->AppId."'
        $result1 = $db_obj->execute($sql1); //Accept
      }
      elseif ($this->btnID == 2) {
        $sql2 = "UPDATE main SET status_id=2 WHERE id = 1"; //'".$this->AppId."'
        $result2 = $db_obj->execute($sql2); //reject
      }
      elseif ($this->btnID == 3) {
        $sql3 = "UPDATE main SET status_id=3 WHERE id = 1"; //'".$this->AppId."'
        $result3 = $db_obj->execute($sql3); //pending
      }
      $db_obj->disconnect();
    }
    public function navBTn($btnID)
    {
      $db_obj = new DB();
      $db_obj->connect();
      $t_obj= new teacher();
      $t_obj->select();
      $m_obj= new main();
      $m_obj->select();
      $currentID= "SELECT main.id FROM main, teacher WHERE teacher.main_id=main.id";
      $result = $db_obj->execute($currentID);
      if($this->btnID == 1){
        $currentID= "SELECT main.id FROM main, teacher WHERE teacher.main_id=main.id+1";
        $result = $db_obj->execute($currentID);
        $t_obj= new teacher();
        $t_obj->select();
        $m_obj= new main();
        $m_obj->select();
      }
      elseif ($this->btnID == 2) {
        $currentID= "SELECT main.id FROM main, teacher WHERE teacher.main_id=main.id-1";
        $result = $db_obj->execute($currentID);
        $t_obj2= new teacher();
        $t_obj2->select();
        $m_obj2= new main();
        $m_obj2->select();
      }
      $db_obj->disconnect();
    }
    public function deleteBtn()
    {
      $db_obj = new DB();
      $db_obj->connect();
      $sql = "DELETE FROM main WHERE id = '".$this->AppId."'";
      $result = $db_obj->execute($sql);
      $db_obj->disconnect();
    }

}
?>
