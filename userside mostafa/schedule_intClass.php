<?php
require_once("db.php");
class Schedule_int{
  public $id;
  public $schedule_id;
  public $child_id;

	public function insert(){
    $DBobject = new DB();
    $sql="INSERT INTO schedule_int (schedule_id,child_id) VALUES ('".$this->schedule_id."','".$this->child_id."')";
    $DBobject->connect();
    $DBobject->execute($sql);
    $DBobject->disconnect();
  }
  public function select(){  
    $DBobject = new DB();
    $sql="SELECT * FROM schedule_int WHERE schedule_id = '".$this->schedule_id."'";
    $DBobject->connect();
    $result = $DBobject->execute($sql);
    while ($row = mysqli_fetch_array($result)){
      echo $row['id'];
      echo $row['schedule_id'];
      echo $row['child_id'];
    }
    $DBobject->disconnect();
  
  }
  public function delete(){ 
    $DBobject = new DB();
    $sql="DELETE FROM schedule_int WHERE id = '".$this->id."'";
    $DBobject->connect();
    $DBobject->execute($sql);
    $DBobject->disconnect();
  
    }

}
?>