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
      $sql = "SELECT * FROM courses WHERE description LIKE '%".$this->description."%'";
      $DBObject->connect();
      $result =  $DBObject->execute($sql);
      $row = mysqli_fetch_array($result);
      $DBObject->disconnect();
      return $row;
     }
     public function selectALL(){
         $DBobject = new DB();
         $sql="SELECT * FROM courses";
         $DBobject->connect();
         $result = $DBobject->execute($sql);
         while ($row = mysqli_fetch_array($result)){
           echo $row['id'];
           echo " - ";
           echo $row['description'];
           echo "<br>";
        }
         $DBobject->disconnect();
         return $row;
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
      $sql = "DELETE FROM courses WHERE courses.id  = '".$id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
      }

}
?>
