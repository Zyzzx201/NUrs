<?php
//require_once("main.php");
class DB{
  private $hostname = 'localhost';
  private $userName = 'root';
  private $Password = '';
  private $DBName = 'swe1';
  private static $instance = null;
  private $con;

public function connect(){
  if ($this->con == null) { //singleton
    $this->con = new mysqli($this->hostname,$this->userName,$this->Password,$this->DBName); // connecting to the localhost
      }
  else { // There is already a PDO, so just send it back.
    return $this->con;
    }

}
// public function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
//where to put it?!

public function execute($sql){
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
