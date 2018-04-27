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
    $this->con = mysqli_connect($this->hostname,$this->userName,$this->Password,$this->DBName); // connecting to the localhost
    }
  else { // There is already a PDO, so just send it back.
    return $this->con;
    }
              
}


// function connect(){
//   if ($this->con == null) { //singleton 
// $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->db); // connecting to the localhost
//   }
//   else { // There is already a PDO, so just send it back.
//    return $this->con;
//     }
  
// if($this->con->connect_error){
// die("Failed to connect: " .$this->con->connect_error);
// }

// else{
// return $this->con;
// }

// }








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
  /*if ($this->con->query($sql) === TRUE) {
   // echo "New record created successfully. Last inserted ID is: ";
  } 
  else {
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
