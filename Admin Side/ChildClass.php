<?php
require_once("db.php");
class user{
    public $id;
    public $ddoe;
    public $branch_id;
    public $main_id;

  	public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO child (main_id, branch_id, ddoe) VALUES ('".$this->main_id."', '".$this->branch_id."', '".$this->ddoe."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $last_id = $DBobject->getID();
      $DBobject->disconnect();
      return $last_id;
    }
    public function select(){
      $DBobject = new DB();
      $sql = "SELECT * FROM child WHERE main_id = '".$this->main_id."'";
      $DBobject->connect();
      $result =  $DBobject->execute($sql);
      //$row = mysqli_fetch_array($result);
      $DBobject->disconnect();
      return $result;
     }
    public  function selectID(){
        $DBObject = new DB();
        $sql = "SELECT id from child where main_id = '".$this->main_id."'";
        $DBObject->connect();
        $result =  $DBObject->execute($sql);

        $DBObject->disconnect();
        return $result;
    }

    public function update(){
      $DBobject = new DB();
      $sql = "UPDATE * child SET child.branch_id = '".$this->branch_id."', child.ddoe = '".$this->ddoe."' where id = '".$this->id."' OR main_id = ".$this->main_id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

      }
}
?>
