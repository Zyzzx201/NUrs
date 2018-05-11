<?php
require_once("db.php");
class user{
    public $id;
    public $main_id;
    public $ddoe;
    public $branch_id;

    
  	public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO child (ddoe, childtype, main_id) VALUES ('".$this->ddoe."','".$this->main_id."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){  
      $DBobject = new DB();
      $sql = "SELECT * FROM child WHERE id = '".$this->id."' ";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['ddoe'];
        echo $row['main_id'];
        echo $row['brach_id'];
    }
      $DBobject->disconnect();
    
     }

    public function update(){ 
      $DBobject = new DB();
      $sql = "UPDATE * child SET branch_id ='".$this->branch_id."', ddoe = '".$this->ddoe."' where id = '".$this->id."' OR main_id = '".$this->main_id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
       
      }
}
?>