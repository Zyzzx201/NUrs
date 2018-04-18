<?php
require_once("db.php");
class utl_int{
    public $id;
    public $pageID;
    public $utlID;

	  public function insert(){
      $DBobject = new DB();
      $sql="INSERT INTO utl_int (page_id,utl_id) VALUES ('".$this->pageID."','".$this->utlID."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){  
      $DBobject = new DB();
      $sql="SELECT * FROM utl_int WHERE page_id = '".$this->pageID."'";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['pageID'];
        echo $row['utlID'];
    }
      $DBobject->disconnect();
    
    }
    public function delete(){ 
      $DBobject = new DB();
      $sql="DELETE FROM utl_int WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    
      }
    //elupdate msh mohema hena
}
?>