<?php
class DB{
  private $hostname = 'localhost';
  private $userName = 'root';
  private $Password = '';
  private $DBName = 'swe1';
  private $con;
public function connect(){
    $this->con = new mysqli($this->hostname,$this->userName,$this->Password,$this->DBName);
}

public function execute($sql){
  if (!mysqli_query($this->con,$sql)){
    echo mysqli_error($this->con);
  }
  $result = $this->con->query($sql);
  return $result;
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
