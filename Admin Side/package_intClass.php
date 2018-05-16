<?php
require_once("db.php");
class package_int{
    public $id;
    public $parent_id;
    public $package_id;

    public function insert(){
        $DBobject = new DB();
        $sql="INSERT INTO package_int (parent_id,package_id) VALUES ('".$this->parent_id."','".$this->package_id."')";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();
    }
    public function select(){
        $DBobject = new DB();
        $sql="SELECT * FROM package_int WHERE parent_id = '".$this->parent_id."' OR package_id = '".$this->package_id."' ";
        $DBobject->connect();
        $result = $DBobject->execute($sql);
        $DBobject->disconnect();
        return $result;

    }
    public function update(){
        $DBObject = new DB();
        $sql = "UPDATE package_int SET  parent_id ='".$this->parent_id."', package_id ='".$this->package_id."' WHERE id = '".$this->id."' OR package_id = '".$this->package_id."' ";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function delete(){
        $DBobject = new DB();
        $sql="DELETE FROM package_int WHERE id = '".$this->id."' OR parent_id = '".$this->parent_id."' ";
        $DBobject->connect();
        $DBobject->execute($sql);
        $DBobject->disconnect();

    }
}
?>