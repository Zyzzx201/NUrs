<?php
require_once("db.php");
class parents{
    public $id;
    public $child_id;
    public $mother_id;
    public $father_id;
    public $fnum;
    public $ffbook;
    public $foccupation;
    //public $fofficenum;
    public $mnum;
    public $mfbook;
    public $moccupation;
    //public $mofficenum;
    public $mstatus_id;
    public $address_id;
    //public $homenum;
    public $usualpickup;

	public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO parent (child_id, mother_id, father_id, fnum, ffbook, foccupation, fofficenum, mnum, mfbook, moccupation, mofficenum, mstatus, addres_id, homenum, usualpickup)
    VALUES ('".$this->child_id."','".$this->mother_id."','".$this->father_id."','".$this->fnum."','".$this->ffbook."'
    ,'".$this->foccupation."','".$this->fofficenum."','".$this->mnum."','".$this->mfbook."','".$this->moccupation."',
    '".$this->mofficenum."','".$this->mstatus_id."','".$this->address_id."','".$this->homenum."','".$this->usualpickup."')";
    $DBObject->connect();
    $DBObject->execute($sql);
    $DBObject->disconnect();

    }
  public function select(){
    $DBObject = new DB();
    $DBObject->connect();
    $sql = "SELECT * FROM parent WHERE id = 1 "; //'".$this->id."'
    $result = $DBObject->execute($sql);
    $row = mysqli_fetch_array($result);
    $DBObject->disconnect();
    return $row;
     }
  public function update(){
      $DBObject = new DB();
      $sql="UPDATE parent SET child_id = '".$this->child_id."',mother_id = '".$this->mother_id."',father_id = '".$this->father_id."',
      ffbook = '".$this->ffbook."',foccupation = '".$this->foccupation."',mfbook = '".$this->mfbook."',moccupation = '".$this->moccupation."',
      mstatus_id = '".$this->mstatus_id."',address_id = '".$this->address_id."',usualpickup = '".$this->usualpickup."' WHERE id = '".$this->id."'";
      $DBObject->connect();
      $DBObject->execute($sql);
      $DBObject->disconnect();

      }

}
?>
