<?php
require_once("db.php");
class payment{
    public $id;
    public $name;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO payment (name) VALUES ('".$this->name."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM payment where id = '".$this->id."' ";
        $DBObject->connect();
        $result =$DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
            echo $row['id'];
            echo $row['name'];
           }
           $DBObject->disconnect();
         }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE payment SET name = '".$this->name."' WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

        }

    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM payment where id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
}
?>