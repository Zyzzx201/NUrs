<?php
require_once("db.php");
class childtype{
    public $id;
    public $type;

    public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO childtype(type) VALUES '".$this->type"' ";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }

    public function select(){
    $DBObject = new DB();
    $sql = "SELECT * FROM childtype WHERE id = '".$this->id."' ";
    $DBObject->connect();
    $result = $DBObject->execute($sql);
    while ($row = mysqli_fetch_array($result)){
    echo $row['id'];
    echo $row['type'];
    }
    $DBObject->disconnect();
    }

    public function update(){
    $DBObject = new DB();
    $sql = "UPDATE childtype SET type= '".$this->type."' WHERE id = '".$this->id"' ";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }

    public function delete(){
    $DBObject = new DB();
    $sql = "DELETE FROM childtype WHERE id ='".$this->id"' ";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }
}
?>
