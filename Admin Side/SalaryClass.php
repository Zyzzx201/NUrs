<?php
require_once("db.php");
class salary{
    public $id;
    public $teacher_id;
    public $month_id;
    public $amount;
    public $bonuses;
    public $deduct;
    public $reason;

    public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO salary (teacher_id, month_id, amount, bonuses, deduct, reason, total) 
        VALUES ('".$this->teacher_id."','".$this->month_id."','".$this->amount."','".$this->bonuses."','".$this->deduct."','".$this->reason."')";
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
            echo $row['teacher_id'];
            echo $row['month_id'];
            echo $row['amount'];
            echo $row['bonuses'];
            echo $row['deduct'];
            echo $row['reason'];
        }
        $DBObject->disconnect();
    }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE salary SET month_id='".$this->month_id."',amount = '".$this->amount."', bonuses ='".$this->bonuses."',
         deduct ='".$this->deduct."', reason ='".$this->reason."'WHERE id = '".$this->id."' OR teacher_id = '".$this->teacher_id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();

    }

    public function delete(){
        $DBObject = new DB();
        $sql = "DELETE FROM salary where id = '".$this->id."' OR teacher_id = '".$this->teacher_id."' LIMIT 1 ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
}



?>