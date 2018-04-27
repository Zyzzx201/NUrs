<?php
class DB{
  private $hostname = 'localhost';
  private $userName = 'swe';
  private $Password = 'sweproject';
  private $DBName = 'id5253396_swe';
  private $con;
public function connect(){
    $this->con = new mysqli($this->hostname,$this->userName,$this->Password,$this->DBName);

}

public function execute($sql){
  $result = $this->con->query($sql);
  return $result;
  /*if ($this->con->query($sql) === TRUE) {
   // echo "New record created successfully. Last inserted ID is: ";
} else {
    echo $this->con->error;
}*/
}

public function disconnect(){
  $this->con->close();
}
public function getID(){
  $ID = $this->con->insert_id;
  return $ID;
}

}
 ?>
