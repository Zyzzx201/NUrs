<?php
require_once("db.php");
class payopt{
    public $id;
    public $options_id;
    public $payment_id;
	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO paymentopt (options_id,payment_id) VALUES ('".$this->options_id."','".$this->payment_id."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM paymentopt where id = '".$this->id."' ";
        $DBObject->connect();
        $result =$DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
            echo $row['id'];
            echo $row['options_id'];
            echo $row['payment_id'];
           }
        $DBObject->disconnect();
        }
    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE paymentopt SET options_id = '".$this->options_id."', payment_id ='".$this->payment_id."' WHERE id = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM paymentopt where id = '".$this->id."'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
        }
}
?>
