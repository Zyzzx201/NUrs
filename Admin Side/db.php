<?php
//require_once("main.php");
class DB{
  private $hostname = 'localhost';
  private $userName = 'root';
  private $Password = '';
  private $DBName = 'swe2';
  private static $instance = null;
  public $con;

    public function connect(){
        if ($this->con == null) { //singleton
            $this->con = mysqli_connect($this->hostname,$this->userName,$this->Password,$this->DBName); // connecting to the localhost
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
//  if ($this->con->query($sql) === TRUE) {
//   echo "New record created successfully. Last inserted ID is: ";
//
//  }
//  else {
//    echo $this->con->error;
//  }
}

public function disconnect(){
  $this->con->close();
}

public function getID(){
  $ID = $this->con->insert_id;
    return $ID;
  //mysqli_insert_id($this->con);`
}

}


?>
