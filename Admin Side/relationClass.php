<?php
require_once("db.php");
    class relation{
        public $id;
        public $relation;
        public function insert(){
            $DBobject =  new DB();
            $sql="INSERT INTO relation(relation) VALUES('".$this->relation."')";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function select()
        {
            $DBObject = new DB();
            $sql = "SELECT * FROM relation where id = '".$this->id."'";
            $DBObject->connect();
            $result =  $DBObject->execute($sql);
            //$row = mysqli_fetch_array($result);
            $DBObject->disconnect();
            return $result;
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
            $sql="UPDATE relation SET relation = '".$this->relation."' WHERE id = " .$this->id;
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function delete(){
            $DBobject = new DB();
            $sql="DELETE FROM relation where id ='".$this->id."' LIMIT 1";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
    }
?>
