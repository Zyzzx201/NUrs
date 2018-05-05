<?php
require_once("db.php");
class events{
    public $id;
    public $date;
    public $description;
    public $location;
    public $time;
    
	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO events (date, description, location, time) VALUES ('".$this->date."','".$this->description."','".$this->location."',
        '".$this->time."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM events " ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
           echo $row['id'];
           echo $row['date'];
           echo $row['description'];
           echo $row['location'];
           echo $row['time'];
       }
       $DBObject->disconnect();
     }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE events SET `date`= '".$this->date."' ,`description`= '".$this->description."',`location`= '".$this->location."',
        `time`= '".$this->time."' WHERE id  = '".$this->id."' OR date = '".$this->date."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
     }

    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM events WHERE id  = '".$this->id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
      }
}
?>