<?php
require_once("db.php");
class user{
    public $id;
    public $ddoe;
    public $childtype;
    public $main_id;  
    
  	public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO child (ddoe, childtype, main_id) VALUES ('".$this->ddoe."','".$this->childtype."','".$this->main_id."')";
      $DBobject->connect();
      echo $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){  
      $DBobject = new DB();
      $sql = "SELECT * FROM child WHERE id = '".$this->id."' or child.childtype = '".$this->childtype."'";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['ddoe'];
        echo $row['childtype'];
    }
      $DBobject->disconnect();
    
     }

    public function update(){ 
      $DBobject = new DB();
      $sql = "UPDATE * child SET child.childtype = '".$this->childtype."' where id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
       
      }
}
?>