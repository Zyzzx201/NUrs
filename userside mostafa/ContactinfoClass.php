<?php
require_once("db.php");
class contactinfo{
    public $id;
    public $main_id;
    public $cellphone;
    
	public function insert(){
        $DBObject = new DB();
        $DBObject->connect();
        $sql = "INSERT INTO contactinfo (main_id, cellphone) VALUES ('".$this->main_id."','".$this->cellphone."')";
        $DBObject->execute($sql);
        $DBObject->disconnect();

    }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM contactinfo WHERE cellphone LIKE '%".$this->cellphone."%' ";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
            while ($row = mysqli_fetch_array($result)){
                echo $row['id'];
                echo $row['cellphone'];
            }
       $DBObject->disconnect();
     }
    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE contactinfo SET cellphone = '".$this->cellphone."' WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

     }
    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM contactinfo WHERE cellphone  = '".$this->cellphone."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    
      }
}
?>