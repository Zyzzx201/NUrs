<?php
require_once("db.php");
class Bill{
    public $id;
    public $parent_id;
    public $payment_id;
    public $price;
    public $discount;
    public $time;
    public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO bill (parent_id, payment_id, price, discount) VALUES ('".$this->parent_id."','".$this->payment_id."','".$this->price."',
        '".$this->discount."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM bill where id = '".$this->id."' OR parent_id = '".$this->parent_id."' OR '".$this->payment_id."'";
        $DBObject->connect();
        $result =$DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM bill where id = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
}
?>