<?php
require_once("db.php");
class options{
    public $id;
    public $name;
    public $type;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO options (name, type) VALUES ('".$this->name."','".$this->type."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM options where id = '".$this->id."' ";
        $DBObject->connect();
        $result =$DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
            echo $row['id'];
            echo $row['name'];
            echo $row['type'];
           }
        $DBObject->disconnect();
        }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE options SET name = '".$this->name."', type ='".$this->type."' WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

        }

    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM options where id = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
}
?>