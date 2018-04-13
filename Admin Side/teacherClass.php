<?php
include_once 'db.php';

class teacher{
    public $id;
    public $nationality;
    public $address_id;
    public $main_id;
    public $mstatus_id;
    public $acaqual1;
    public $date_acaqual1;
    public $personal_qual1;
    public $date_ppersonalqual1;
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
        $sql = "INSERT INTO teacher (nationality, address_id, main_id, mstatus_id, acaqual1, date_acaqual1, personal_qual1,
        date_ppersonalqual1, pempname, pempaddress_id, pempnum, corlsalary, reqsalary, othernursery, povnursery)
        VALUES ('".$this->nationality."','".$this->address_id."','".$this->main_id."','".$this->mstatus_id."',
        '".$this->acaqual1."','".$this->date_acaqual1."','".$this->personal_qual1."','".$this->date_ppersonalqual1."',
        '".$this->pempname."','".$this->pempaddress_id."','".$this->pempnum."','".$this->corsalary."','".$this->reqsalary."',
        '".$this->othernursery."','".$this->povnursery."')";
        echo $DBObject->execute($sql);
        $last_id = $DBObject->getID();
        $DBObject->disconnect();
        return $last_id;
    }
    public function select(){
      $DBObject = new DB();
      $DBObject->connect();
      $sql = "SELECT * FROM teacher WHERE '".$this->id."' = teacher.main_id = '".$this->main_id."'";
      $result =  $DBObject->execute($sql);
      $row = mysqli_fetch_array($result);
      $DBObject->disconnect();
      return $row;
     }
    public function update(){
      $DBObject = new DB();
      $DBObject->connect();
      $sql = "UPDATE teacher SET nationality= '".$this->nationality."', address_id= '".$this->address_id."',
      main_id= '".$this->main_id."', mstatus_id= '".$this->mstatus_id."', acaqual1= '".$this->acaqual1."',
      date_acaqual1= '".$this->date_acaqual1."', personal_qual1= '".$this->personal_qual1."',
      date_ppersonalqual1= '".$this->date_ppersonalqual1."', pempname= '".$this->pempname."',
      pempaddress_id= '".$this->pempaddress_id."', pempnum= '".$this->pempnum."', corlsalary= '".$this->corsalary."',
      reqsalary= '".$this->reqsalary."', othernursery= '".$this->othernursery."', povnursery= '".$this->povnursery."'
      WHERE id= '".$this->id."' ";
      $DBObject->disconnect();
      }

}
?>
