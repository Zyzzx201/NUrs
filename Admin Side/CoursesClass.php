<?php
require_once('db.php');

class Courses{
    public $id;
    public $description;

	public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO courses (description) VALUES ('".$this->description."')";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM courses WHERE id =".$this->id;
        $DBObject->connect();
        $result =  $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
     }
     public function selectAll(){
      $DBObject = new DB();
      $sql = "SELECT * FROM courses ";
      $DBObject->connect();
      $result = $DBObject->execute($sql);
      $DBObject->disconnect();
      return $result;
     }
    public function display(){
        $DBObject = new DB();
        $sql = "SELECT * FROM courses ";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
    public function update(){
        $DBObject = new DB();
        $sql="UPDATE courses SET description='".$this->description."' WHERE id ='".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
     }
    public function delete(){
      $DBObject = new DB();
      $sql = "DELETE FROM courses WHERE courses.id  = '".$this->id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
      }

      public function SelectID(){
	    $DBObject = new DB();
	    $sql = "SELECT id FROM courses WHERE description = '".$this->description."'";
	    $Result = $DBObject->execute($sql);
	    $Row = mysqli_fetch_array($Result);
	    return $Row['id'];
      }

}
?>
