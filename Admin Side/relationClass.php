<?php
require_once("db.php");
    class relation{
        public $id;
        public $value;
        public function insert(){
            $DBobject =  new DB();
            $sql="INSERT INTO relation(value) VALUES('".$this->value."')";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function select()
        {
            $DBObject = new DB();
            $sql = "SELECT * FROM relation";
            $DBOject->connect();
            $result =  $DBObject->execute($sql);
            $row = mysqli_fetch_array($result);
            $DBObject->disconnect();
            return $row;
        }
        public function selectALL(){
            $DBobject = new DB();
            $sql="SELECT * FROM relation";
            $DBobject->connect();
            $result = $DBobject->execute($sql);
            $DBobject->disconnect();
            return $result;
        }
        public function update(){
            $DBobject = new DB();
            $sql="UPDATE relation SET value = '".$this->value."' ";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function delete(){
            $DBobject = new DB();
            $sql="DELETE FROM relation where id ='".$this->id."' OR value LIKE '%".$this->value."%' LIMIT 1";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
    }
?>
