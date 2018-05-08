<?php
require_once("db.php");
class error{
    public $id;
    public $description;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO error (description) VALUES ('".$this->description."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM error WHERE error.id = '".$this->id."' " ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $row = mysqli_fetch_array($result);
        $DBObject->disconnect();
        return $row;
     }
     public function update(){
        $DBObject = new DB();
        $sql = "UPDATE error SET description ='".$this->description."' WHERE id  = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
     }
    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM error WHERE id  = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

      }
}
?>
