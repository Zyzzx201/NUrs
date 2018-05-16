<?php
require_once('db.php');
class branch{
    public $id;
    public $value;
	public function insert(){
      $DBObject = new DB();
      $sql = "INSERT INTO branch (value) VALUES ('".$this->value."')";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
    }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM branch where id = '".$this->id."' ";
        $DBObject->connect();
        $result =  $DBObject->execute($sql);
        //$row = mysqli_fetch_array($result);
        $DBObject->disconnect();
        return $result;
    }
    public function selectAll(){
        $DBObject = new DB();
        $sql = "SELECT * FROM branch" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE branch SET value = '".$this->value."' WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function delete(){
      $DBObject = new DB();
      $sql = "DELETE FROM branch where id = '".$this->id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
    }

}
?>
