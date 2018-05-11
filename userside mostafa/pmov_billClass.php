<?php
require_once("db.php");
class Pmovbill{
    public $id;
    public $pmov_id;
    public $bill_id;

    public function insert(){
        $DBobject = new DB();
        $sql="INSERT INTO Pmovbill (pmov_id,bill_id) VALUES ('".$this->pmov_id."','".$this->bill_id."')";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();
    }
    public function select(){
        $DBobject = new DB();
        $sql="SELECT * FROM Pmovbill WHERE bill_id = '".$this->bill_id."'";
        $DBobject->connect();
        $result = $DBobject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
            echo $row['id'];
            echo $row['pmov_id'];
            echo $row['bill_id'];
        }
        $DBobject->disconnect();

    }
    public function delete(){
        $DBobject = new DB();
        $sql="DELETE FROM Pmovbill WHERE id = '".$this->id."' AND bill_id = '".$this->bill_id."' ";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();

    }
}


?>