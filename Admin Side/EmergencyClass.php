<?php
require_once("db.php");
class emergency{
    public $id;
    public $main_id;
    public $ecname;
    public $ecnum;
    public $ecaddress_id;
    public $relation;
    public $extrainfo;

    public function insert(){
      $DBobject = new DB();
      $DBobject->connect();
      $sql = "INSERT INTO emergency(main_id, ecname, ecnum, ecaddress_id, relation_id, extrainfo)
      VALUES ('".$this->main_id."','".$this->ecname."','".$this->ecnum."','".$this->ecaddress_id."',
      '".$this->relation."','".$this->extrainfo."')";
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){
      $DBobject = new DB();
      $DBobject->connect();
      $sql = "SELECT * FROM emergency WHERE main_id = '".$this->main_id."' ";
      $result = $DBobject->execute($sql);
      $DBobject->disconnect();
      return $result;
     }

    public function update(){
      $DBobject = new DB();
      $sql = "UPDATE emergency SET main_id='".$this->main_id."',ecname='".$this->ecname."',ecnum='".$this->ecnum."'
      ,ecaddress_id='".$this->ecaddress_id."',relation='".$this->relation."',extrainfo='".$this->extrainfo."'
      WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();

      }

}
?>
