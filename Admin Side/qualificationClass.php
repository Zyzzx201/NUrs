<?php
require_once("db.php");
class qualification{
    public $id;
    public $name;

    public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO qualification (name) VALUES ('".$this->name."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM qualification" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }

    public function selectAll(){
        $DBObject = new DB();
        $sql = "SELECT * FROM qualification" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE qualification SET name ='".$this->name."' WHERE id  = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM qualification WHERE id  = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

}
?>