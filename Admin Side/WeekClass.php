<?php
require_once("db.php");
class week{
    public $id;
    public $day;

    public function insert(){
        $DBobject = new DB();
        $sql = "INSERT INTO week (day) VALUES ('".$this->day."')";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();

      }
      public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM week"; //add condition if you want one
        $DBObject->connect();
        $result =  $DBObject->execute($sql);
        $row = mysqli_fetch_array($result);
        $DBObject->disconnect();
        return $row;
     }

     public function selectAll(){
        $DBObject = new DB();
        $sql = "SELECT * FROM week" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
          echo $row['id'];
          echo " - ";
          echo $row['days'];
          echo "<br>";
       }
       $DBObject->disconnect();
     }

      public function delete(){
        $DBobject = new DB();
        $sql="DELETE FROM week where id = '".$this->id."'";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();

        }
      public function update(){
        $DBobject = new DB();
        $sql = "UPDATE week SET day='".$this->day."' WHERE id = '".$this->id."'";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();
        }

}
?>
