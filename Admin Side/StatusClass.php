<?php
require_once("db.php");
class status{
    public $id;
    public $name;

	  public function insert(){
      $DBobject = new DB();
      $sql="INSERT INTO status(name) VALUES ('".$this->name."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){ 
      $DBobject = new DB();
      $sql="SELECT * FROM status WHERE id = '".$this->id."' OR name = '".$this->name."'";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['name'];
    }
      $DBobject->disconnect(); 
    
     }
    public function delete(){ 
      $DBobject = new DB();
      $sql="DELETE FROM status WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    
      }
    public function update(){ 
      $DBobject = new DB();
      $sql = "UPDATE status name='".$this->name."' WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
        
      }
}
?>