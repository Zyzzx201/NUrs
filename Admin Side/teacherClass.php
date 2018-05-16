<?php
include_once 'db.php';

class teacher{
    public $id;
    public $nationality;
    public $address_id;
    public $main_id;
    public $mstatus_id;
    public $pempname;
    public $pempaddress_id;
    public $pempnum;
    public $corsalary;
    public $reqsalary;
    public $othernursery;
    public $povnursery;

    public function insert(){
        $DBObject = new DB();
        $DBObject->connect();
        $sql = "INSERT INTO teacher (nationality, address_id, main_id, mstatus_id, pempname, pempaddress_id,
        pempnum, corlsalary, reqsalary, othernursery, povnursery)
        VALUES ('".$this->nationality."','".$this->address_id."','".$this->main_id."','".$this->mstatus_id."',
        '".$this->pempname."','".$this->pempaddress_id."','".$this->pempnum."','".$this->corsalary."','".$this->reqsalary."',
        '".$this->othernursery."','".$this->povnursery."')";
        $DBObject->execute($sql);
        //$last_id = $DBObject->getID();
        //echo "<br> last_id- ".$last_id."<br>";
        //$DBObject->disconnect();
        //return $last_id;
        return mysqli_insert_id($DBObject->con);
    }
    public function select(){
      $DBObject = new DB();
      $DBObject->connect();
      $sql = "SELECT * FROM teacher WHERE main_id = '".$this->main_id."'";
      $result =  $DBObject->execute($sql);
      $DBObject->disconnect();
      return $result;
     }

    public function selectID(){
        $DBObject = new DB();
        $sql = "SELECT id FROM teacher WHERE main_id ='".$this->main_id."'";
        $DBObject->connect();
        $result =  $DBObject->execute($sql);
        $DBObject->disconnect();
        return $result;
    }
    public function update(){
      $DBObject = new DB();
      $DBObject->connect();
      $sql = "UPDATE teacher SET nationality= '".$this->nationality."', address_id= '".$this->address_id."',
      main_id= '".$this->main_id."', mstatus_id= '".$this->mstatus_id."', pempname= '".$this->pempname."',
      pempaddress_id= '".$this->pempaddress_id."', pempnum= '".$this->pempnum."', corlsalary= '".$this->corsalary."',
      reqsalary= '".$this->reqsalary."', othernursery= '".$this->othernursery."', povnursery= '".$this->povnursery."'
      WHERE id= '".$this->id."' ";
        $DBObject->execute($sql);
        $DBObject->disconnect();
      }


}
?>
