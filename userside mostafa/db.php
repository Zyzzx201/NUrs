<?php
class DB{ //implements singleton
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
/*
   public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->pdo;
    }
*/
public function execute($sql){
  $result = $this->con->query($sql);
  return $result;
  /* if ($this->con->query($sql) === TRUE) {
    echo "New record created successfully. Last inserted ID is: ";
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

Class singleton{
  
  private function __construct()
  {
  }

  public function getInstance() {
      if($instance === null) {
          $instance = new singleton();
      }
      return $instance;
  }

}
//function 1
/* public static function singleton(){
      if (!isset(self::$instance)){
        self::$instance = new __CLASS__;
      }
      return self::$instance;
}
//function 2
public static function getInstance(){
  if ($instance == null){
  $instance = new DB();
  }
  return $instance;
}
//function 3
public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }

 */   
}
/*
$user1 = DB::singleton();
$user2 = DB::singleton();
$user3 = DB::singleton(); */


?>
