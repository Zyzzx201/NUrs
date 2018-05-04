<?php
require_once("db.php");
class salary{
    public $id;
    public $amount;
    public $bonuses;
    public $deduct;
    public $total;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO `salary` (`amount`, `bonuses`, `deduct`, `total`) 
        VALUES ('".$this->amount."','".$this->bonuses."','".$this->deduct."','".$this->total."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM salary where id = '".$this->id."' ";
        $DBObject->connect();
        $result =$DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
            echo $row['id'];
            echo $row['amount'];
            echo $row['bonuses'];
            echo $row['deduct'];
            echo $row['total'];
           }
        $DBObject->disconnect();
        }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE salary SET amount = '".$this->amount."', bonuses ='".$this->bonuses."', bonuses ='".$this->deduct."', bonuses ='".$this->total."'
         WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

        }

    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM salary where id = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
}



?>