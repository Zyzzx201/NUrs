<?php
require_once("db.php");
class week{
    public $id;
    public $day;

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM week  " ; //add condition if you want one
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
           echo $row['id'];
           echo $row['day'];
       }
       $DBObject->disconnect();
     }
}
?>