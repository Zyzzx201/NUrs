<?php
require_once("db.php");
class Schedule{
    public $id;
    public $course_id;
    public $start;
    public $end;

	  public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO schedule (course_id, start, end) VALUES ('".$this->course_id."','".$this->start."','".$this->end."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

    }
    public function select(){
      $DBobject = new DB();
      $sql = "SELECT * FROM schedule WHERE id = '".$this->course_id."' ";
      $DBobject->connect();
      $result =  $DBobject->execute($sql);
      $row = mysqli_fetch_array($result);
      $DBobject->disconnect();
      return $row;

    }

    public function delete(){
      $DBobject = new DB();
      $sql="DELETE FROM schedule WHERE id = '".$this->course_id."' ";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

    }
    public function update(){
      $DBobject = new DB();
      $sql="UPDATE schedule SET course_id =  ,start ='".$this->start."' ,end = '".$this->end."'  WHERE id = '".$this->course_id."' ";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

    }
}
?>
