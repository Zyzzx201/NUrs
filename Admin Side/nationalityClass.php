<?php
require_once("db.php");
class nationality{
    public $id;
    public $name;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO nationality (name) VALUES ('".$this->name."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function select(){
        $DBObject = new DB();
        $DBObject->connect();
        $sql = "SELECT * FROM nationality WHERE id = '".$this->id."'" ;
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
     }
     public function selectAll(){
        $DBObject = new DB();
        $sql = "SELECT * FROM nationality" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
       $DBObject->disconnect();
       return $result;
     }

     public function update(){
        $DBObject = new DB();
        $sql = "UPDATE nationality SET name ='".$this->name."' WHERE nationality.id  = ".$this->id;
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
     }

    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM nationality WHERE id  = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

      }
      public function selectID(){
          $DBObject = new DB();
          $sql = "SELECT id FROM nationality where name='".$this->name."'";
          $DBObject->connect();
          $result = $DBObject->execute($sql);
          $DBObject->disconnect();
          return $result;
      }
}
?>
