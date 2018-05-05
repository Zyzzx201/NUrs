<?php
require_once("db.php");
class qualvalue{
    public $id;
    public $qual_id;
    public $teacher_id;
    public $value;
    public $date;
    
	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO qualvalue (qual_id, teacher_id, value, date) VALUES ('".$this->qual_id."','".$this->teacher_id."','".$this->value."',
        '".$this->date."')";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function select(){
        $DBObject = new DB();
        $sql = "SELECT * FROM qualvalue" ;
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)){
           echo $row['id'];
           echo $row['qual_id'];
           echo $row['teacher_id'];
           echo $row['value'];
           echo $row['date'];
       }
       $DBObject->disconnect();
     }

    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE qualvalue SET `qual_id`= '".$this->qual_id."' ,`teacher_id`= '".$this->teacher_id."',`value`= '".$this->value."',
        `date`= '".$this->date."' WHERE id  = '".$this->id."' OR teacher_id = '".$this->teacher_id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
     }

    public function delete(){ 
        $DBObject = new DB();
        $sql = "DELETE FROM qualvalue WHERE id  = '".$this->id."' OR teacher_id = '".$this->teacher_id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
      }
}
?>