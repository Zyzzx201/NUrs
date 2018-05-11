<?php
require_once("db.php");

class month{
    public $id;
    public $name;

    public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO month (name) VALUES ('".$this->name."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM month WHERE id = '".$this->id."' " ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        //$row = mysqli_fetch_array($result);
        $DBObject->disconnect();
        return $result;
    }
    public function selectAll(){
        $DBObject = new DB();
        $sql = "SELECT * FROM month" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE month SET name ='".$this->name."' WHERE id  = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM month WHERE id  = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

    }

}