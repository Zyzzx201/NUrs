<?php
require_once("db.php");
class Attend_int{
    public $id;
    public $child_id;
    public $week_id;
    
    public function insert(){
      $DBobject = new DB();
      $sql="INSERT INTO attend_int (child_id,week_id) VALUES ('".$this->child_id."','".$this->week_id."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){  
      $DBobject = new DB();
      $sql="SELECT * FROM attend_int WHERE child_id = '".$this->child_id."'";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['child_id'];
        echo $row['week_id'];
      }
      $DBobject->disconnect();
    
    }
    public function delete(){ 
      $DBobject = new DB();
      $sql="DELETE FROM attend_int WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    
      }
}
?>