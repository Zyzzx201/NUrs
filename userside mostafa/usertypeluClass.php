<?php
require_once("db.php");
class usertypelu{
    public $id;
    public $usertype;

    public function insert(){ 
      $DBobject = new DB();
      $sql = "INSERT INTO usertypelu (usertype) VALUES ('".$this->usertype."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    
    }
    public function select(){  
      $DBobject = new DB();
      $sql="SELECT * FROM usertypelu WHERE id = '".$this->id."'";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
          echo $row['id'];
          echo $row['usertype'];
      }
      $DBobject->disconnect();
     }

    public function delete(){ 
      $DBobject = new DB();
      $sql="DELETE FROM usertypelu where id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    
      }
    public function update(){ 
      $DBobject = new DB();
      $sql = "UPDATE usertypelu SET usertype='".$this->usertype."' WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
      }
}
?>