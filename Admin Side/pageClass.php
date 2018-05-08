<?php
require_once("db.php");
class Page{
    public $id;
    public $friendlyname;
    public $path;
    public $html;

	  public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO page (friendlyname, path, html) VALUES ('".$this->friendlyname."','".$this->path."' ,'".$this->html."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

    }
    public function select(){
      $DBobject = new DB();
      $sql = "SELECT * FROM page WHERE id = '".$this->id."' OR friendlyname = '".$this->friendlyname."'";
      $DBobject->connect();
      $result =  $DBobject->execute($sql);
      $row = mysqli_fetch_array($result);
      $DBobject->disconnect();
      return $row;
     }

     public function selectAll(){
        $DBObject = new DB();
        $sql = "SELECT * FROM page" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
       $DBObject->disconnect();
       return $result;
     }

    public function delete(){
      $DBobject = new DB();
      $sql = "DELETE FROM page WHERE id = '".$this->id."' ";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();


      }
    public function update(){
      $DBobject = new DB();
      $sql = "UPDATE page SET friendlyname='".$this->friendlyname."' , path='".$this->path."', html= '".$this->html."' WHERE id = '".$this->id."' ";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

      }
}
?>
