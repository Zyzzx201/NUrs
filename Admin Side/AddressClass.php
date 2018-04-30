<?php
require_once('db.php');
class Address{
    public $id;
    public $parent_id;
    public $name;

	  public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO address (parentid, name) VALUES ('".$this->parent_id."','".$this->name."')";
    $DBObject->connect();
     echo $DBObject->execute($sql);
    $DBObject->disconnect();
    }

    public function select(){
      $DBObject = new DB();
      $DBObject->connect();
      $sql = "SELECT * from address";
      $result =  $DBObject->execute($sql);
      $row = mysqli_fetch_array($result);
      $DBObject->disconnect();
      return $row;
     }

    public function selectAll(){
      $DBObject = new DB();
      $DBObject->connect();
      $sql = "SELECT * from address";
      $result =  $DBObject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo " - ";
        echo $row['name'];
        echo "<br>";
     }
      $DBObject->disconnect();
      return $row;
     }

    public function delete(){
      $DBObject = new DB();
      $sql = "DELETE FROM address WHERE id  = '".$thid->id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
      }
      public function getAllRoots (){
        $sql = 'SELECT * FROM address';
        $DB = new DB();
        $DB->connect();
        $index = 0;
        $result = $DB->execute($sql);
        $Names = array();
        $DB->disconnect();
        if ($result != null){
          while ($row = mysqli_fetch_array($result)){
            $Names[$index] = $row['name'];
            $index++;
          }

        return $Names;
      }
        else {
          return 0;
        }

      }
      public function fillObject ($name){
        $sql = 'SELECT * FROM address WHERE name = "'.$name.'"';
        $DB = new DB();
        $DB->connect();
        $result = $DB->execute($sql);
        $DB->disconnect();
        $row = mysqli_fetch_array($result);
        $this->id = $row['id'];
        $this->name = $row['name'];

      }
}
?>
