<?php
require_once("db.php");
class Schedule{
    public $id;
    public $course_id;
    public $childtype_id;
    public $start;
    public $ends;
	  public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO schedule (course_id,childtype_id, start, ends) VALUES ('".$this->course_id."','".$this->childtype_id."','".$this->start."','".$this->ends."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){
      $DBobject = new DB();
      $sql = "SELECT * FROM schedule WHERE course_id = '".$this->course_id."' OR childtype_id = '".$this->childtype_id."' OR id = '".$this->id."'  ";
      $DBobject->connect();
      $result =  $DBobject->execute($sql);
      $row = mysqli_fetch_array($result);
      $DBobject->disconnect();
      return $row;
    }
    public function selectAll(){
     $DBObject = new DB();
     $sql = "SELECT * FROM schedule WHERE childtype_id = ".$this->childtype_id;
     $DBObject->connect();
     $result = $DBObject->execute($sql);
     $DBObject->disconnect();
     return $result;
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
      $sql="UPDATE schedule SET course_id = '".$this->course_id."'  ,start ='".$this->start."' ,ends = '".$this->ends."', childtype_id ='".$this->childtype_id."'  WHERE course_id = '".$this->course_id."' ";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

    }
    public function display(){
        $DBObject = new DB();
        $sql = "SELECT start, ends FROM schedule ";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
}
?>
