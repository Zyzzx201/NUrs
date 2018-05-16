<?php
require_once("db.php");
class package{
    public $id;
    public $name;
    public $discount;
    public $description;

    public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO package (name, discount, description) VALUES ('".$this->name."','".$this->discount."', '".$this->description."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM package WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE package SET  discount ='".$this->name."', discount ='".$this->discount."',description ='".$this->description."' WHERE id  = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM package WHERE id  = '".$this->id."' OR name = '%".$this->name."%' LIMIT 1";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
}
?>