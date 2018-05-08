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
  public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO main (utype,status_id,fname,lname,dob,ssn)
    VALUES ('".$this->utype."','".$this->status_id."','".$this->fname."','".$this->lname."','".$this->dob."','".$this->ssn."')";
    $DBObject->connect();
    $DBObject->execute($sql);
    $last_id = $DBObject->getID();
    $DBObject->disconnect();
    return $last_id;
  }
  public function select(){
    $DBObject = new DB();
    $sql = "SELECT * FROM main WHERE id =".$this->id;
    $DBObject->connect();
    $result =  $DBObject->execute($sql);
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
    $sql = "UPDATE main SET utype = '".$this->utype."' ,'".$this->status_id."',
    fname = '".$this->fname."',lname = '".$this->lname."' ,dob= '".$this->dob."' ,ssn='".$this->ssn."' WHERE id ='".$this->id."'";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
  }
}
?>
