<?php
require_once("db.php");
class childtype{
    public $id;
    public $type;
    public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO childtype(type) VALUES ('".$this->type."') ";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }
    public function select(){
    $DBObject = new DB();
    $sql = "SELECT * FROM childtype WHERE id = '".$this->id."' ";
    $DBObject->connect();
    $result =  $DBObject->execute($sql);
//    $row = mysqli_fetch_array($result);
    $DBObject->disconnect();
    return $result;
    }
    public function selectAll(){
      $DBObject = new DB();
      $sql = "SELECT * FROM childtype" ;
      $DBObject->connect();
      $result = $DBObject->execute($sql);
      $DBObject->disconnect();
      return $result;
    }
    public function selectAll2(){
      $DBObject = new DB();
      $sql = "SELECT * FROM childtype" ;
      $DBObject->connect();
      $result = $DBObject->execute($sql);
      $DBObject->disconnect();
      return $result;
    }
    public function update(){
    $DBObject = new DB();
    $sql = "UPDATE childtype SET type= '".$this->type."' WHERE id = '".$this->id."' ";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }
    public function delete(){
    $DBObject = new DB();
    $sql = "DELETE FROM childtype WHERE id = '".$this->id."' ";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }
    public function SelectID(){
        $DBObject = new DB();
        $sql = "SELECT id FROM childtype WHERE type = '".$this->type."'";
        $Result = $DBObject->execute($sql);
        $Row = mysqli_fetch_array($Result);
        return $Row['id'];
    }
}
?>
