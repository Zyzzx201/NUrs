<?php
require_once("db.php");
    class relation{
        $id;
        $value;

        public function insert(){
            $DBobject =  new DB();
            $sql="INSERT INTO relation(value) VALUES('".$this->value."')";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function select(){
            $DBobject = new DB();
            $sql="SELECT * FROM relation";
            $DBobject->connect();
            $result = $DBobject->execute($sql);
             while ($row = mysqli_fetch_array($result)){
                echo $row['id'];
                echo $row['value'];
            $DBobject->disconnect();
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