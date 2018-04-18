<?php
require_once('db.php');
class Address{
    public $id;
    public $parent_id;
    public $name;

	  public function insert(){
      $DBObject = new DB();
      $sql = "INSERT INTO address (parentid, name) VALUES ('".$this->parent_id."','".$this->name."')";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
    }

    public function select(){  
      $DBObject = new DB();
      $sql = "SELECT * from address";
      $DBObject->connect();
      $result = $DBObject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['name'];
      }
     $DBObject->disconnect();
     }

    public function delete(){ 
      $DBObject = new DB();
      $sql = "DELETE FROM address WHERE address.id  = '".$id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
      }
      public function getAllRoots (){
        $sql = 'SELECT * FROM address WHERE parentid = 1';
        $DB = new DB();
        $DB->connect();
        $index = 0;
        $result = $DB->execute($sql);
        $Names = array();
        $DB->disconnect();
        if ($result != null){
          while ($row = mysqli_fetch_array($result)){
            $Names[$index] = $row['name'];
            $index++;
          }
  
        return $Names;
      }
        else {
          return 0;
        }
  
      }
      public function fillObject ($name){
        $sql = 'SELECT * FROM address WHERE name = "'.$name.'"';
        $DB = new DB();
        $DB->connect();
        $result = $DB->execute($sql);
        $DB->disconnect();
        $row = mysqli_fetch_array($result);
        $this->id = $row['id'];
        $this->name = $row['name'];
        
      }
}
?>