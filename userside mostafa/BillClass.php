<?php
require_once("db.php");
class Bill{
    public $id;
    public $parent_id;
    public $payment_o_id;
    public $value;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO pm_o_v(parent_id, payment_o_id, value) VALUES ('".$this->parent_id."','".$this->payment_o_id."','".$this->value."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM pm_o_v where id = '".$this->id."' ";
        $DBObject->connect();
        $result =$DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
            echo $row['id'];
            echo $row['parent_id'];
            echo $row['payment_o_id'];
            echo $row['value'];
           }
        $DBObject->disconnect();
        }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE pm_o_v SET parent_id = '".$this->parent_id."', payment_o_id ='".$this->payment_o_id."',value = '".$this->value."'  WHERE id = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

        }

    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM pm_o_v where id = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
}
?>