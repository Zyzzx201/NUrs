<?php
require_once("db.php");
class parents{
    public $id;
    public $child_id;
    public $mother_id;
    public $father_id;
    public $ffbook;
    public $foccupation;
    public $mfbook;
    public $moccupation;
    public $mstatus_id;
    public $address_id;
    public $usualpickup;

	public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO parent (child_id, mother_id, father_id, ffbook, foccupation, mfbook, moccupation,
      mstatus_id, address_id, usualpickup) VALUES ('".$this->child_id."','".$this->mother_id."',
      '".$this->father_id."','".$this->ffbook."','".$this->foccupation."','".$this->mfbook."',
    '".$this->moccupation."','".$this->mstatus_id."','".$this->address_id."','".$this->usualpickup."')";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();
    }
  public function select(){
    $DBObject = new DB();
    $sql = "SELECT * FROM parent WHERE child_id = '".$this->child_id."'";
    $DBObject->connect();
    $result =  $DBObject->execute($sql);
    //$row = mysqli_fetch_array($result);
    $DBObject->disconnect();
    return $result;
  }

    public function selectParents(){
        $DBObject = new DB();
        $sql = "SELECT * FROM parent WHERE child_id = '".$this->child_id."'";
        $DBObject->connect();
        $result =  $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }

  public function update(){
      $DBObject = new DB();
      //echo "strinf".$this->child_id;
      $sql="UPDATE parent SET child_id = '".$this->child_id."',mother_id = '".$this->mother_id."',father_id = '".$this->father_id."',
      ffbook = '".$this->ffbook."',foccupation = '".$this->foccupation."',mfbook = '".$this->mfbook."',moccupation = '".$this->moccupation."',
      mstatus_id = '".$this->mstatus_id."',address_id = '".$this->address_id."',usualpickup = '".$this->usualpickup."' WHERE id = '".$this->id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();

      }

}
?>
