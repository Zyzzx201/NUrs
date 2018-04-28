<?php
require_once('db.php');
class admin{
    public $id;
    public $teacher_id;
    public $username;
    public $passwords;

	  public function insert(){
      $DBObject = new DB();
      $sql = "INSERT INTO admin (teacher_id, username, passwords) VALUES ( '".$this->teacher_id."' ,'".$this->username."', '".$this->passwords."')";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
    }

    public function select(){  
      $DBObject = new DB();
      $sql = "SELECT * FROM admin where id = '".$this->id."' OR teacher_id = '".$this->teacher_id."'";
      $DBObject->connect();
      $result = $DBObject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['teacher_id'];
        echo $row['username'];
        echo $row['passwords'];
      }
     $DBObject->disconnect();
     }

    public function delete(){ 
      $DBObject = new DB();
      $sql = "DELETE FROM admin where id = '".$this->id."' OR teacher_id ='".$this->teacher_id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();
      }

    public function compare(){
        $value1 = "Wrong Username and Password combination";
        $value2 = "Validated!";
        $DBObject = new DB();
        $sql = "SELECT username, passwords FROM admin WHERE username = '".$this->username."' AND passwords = '".$this->passwords."' LIMIT 1";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        if(mysqli_fetch_row($result) == true)
            return $value1;
        else
            return $value2;
        $DBObject->disconnect();
        //         //select * statements for password where password == password and email fetch row
        //         /* 
    
        //         $result = mysql_query(
        //         "SELECT * FROM preditors_assigned WHERE lecture_name='$lectureName'");
    
        //         if(mysql_fetch_row($result) == false)
        //         return 'avilable';
        //         return 'assign';
        //         */
        //     }
}
?>