<?php
require_once("db.php");
class main{
public $id;
public $utype;
public $status_id;
public $fname;
public $lname;
public $dob;
public $ssn;
public $searchname;
  public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO main (utype,status_id,fname,lname,dob,ssn)
    VALUES ('".$this->utype."','".$this->status_id."','".$this->fname."','".$this->lname."','".$this->dob."','".$this->ssn."')";
    $DBObject->connect();
    $DBObject->execute($sql);
    //$last_id = $DBObject->getID();
    //echo "<br> last_id- ".$last_id."<br>";
    //$DBObject->disconnect();
    //return $last_id;
      return mysqli_insert_id($DBObject->con);
  }
  public function select(){
    $DBObject = new DB();
    $sql = "SELECT * FROM main WHERE id ='".$this->id."'";
    $DBObject->connect();
    $result =  $DBObject->execute($sql);
    $DBObject->disconnect();
    return $result;
  }


    public function selectSSN(){
        $DBObject = new DB();
        $sql = "SELECT id FROM main WHERE ssn = '".$this->ssn."'";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
  public function selectAll(){
     $DBObject = new DB();
     $sql = "SELECT * FROM main WHERE status_id =".$this->status_id ;
     $DBObject->connect();
     $result = $DBObject->execute($sql);
     $DBObject->disconnect();
     return $result;
  }
  public function delete(){
    $DBObject = new DB();
    $sql = "Delete FROM main WHERE main.id = '".$this->id."'";
    $DBObject->connect();
    $DBObject->exceute ($sql);
    $DBObject->disconnect();
  }
  public function update(){
    $DBObject = new DB();
    $sql = "UPDATE main SET utype = '".$this->utype."' , status_id ='".$this->status_id."',
    fname = '".$this->fname."',lname = '".$this->lname."' ,dob= '".$this->dob."'
     ,ssn='".$this->ssn."' WHERE id ='".$this->id."'";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
  }
  public function search(){
      $DBObject = new DB();
      $sql = "SELECT * FROM main WHERE fname LIKE '".$this->searchname."' OR lname LIKE '".$this->searchname."'";
      $DBObject->connect();
      $result =  $DBObject->execute($sql);
      $DBObject->disconnect();
      return $result;
  }


}
?>
