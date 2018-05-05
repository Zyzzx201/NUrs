<?php
require_once("db.php");
    class relation{
        public $id;
        public $relation;

        public function insert(){
            $DBobject =  new DB();
            $sql="INSERT INTO relation (relation) VALUES('".$this->relation."')";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function select(){
            $DBobject = new DB();
            $sql="SELECT * FROM relation";
            $DBobject->connect();
            $result = $DBobject->execute($sql);
            $row = mysqli_fetch_array($result);
            $DBobject->disconnect();
            return $row;
        }
        public function selectALL(){
            $DBobject = new DB();
            $sql="SELECT * FROM relation";
            $DBobject->connect();
            $result = $DBobject->execute($sql);
            while ($row = mysqli_fetch_array($result)){
              echo $row['id'];
              echo " - ";
              echo $row['relation'];
              echo "<br>";
           }
            $DBobject->disconnect();
            return $row;
        }
        public function update(){
            $DBobject = new DB();
            $sql="UPDATE relation SET relation = '".$this->relation."' WHERE id ='".$this->id."' ";
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }
        public function delete(){
            $DBobject = new DB();
            $sql="DELETE FROM relation where id ='".$this->id."'"; /* OR value LIKE '%".$this->value."%' LIMIT 1*/
            $DBobject->connect();
            $DBobject->execute($sql);
            $DBobject->disconnect();
        }

    }
?>
