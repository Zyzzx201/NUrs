<?php
require_once("MainController.php");
require_once("teacherController.php");
require_once("AddressController.php");
require_once("MaritalController.php");
require_once("ContactinfoController.php");
require_once("nationalityController.php");
require_once("qualvaluesController.php");
require_once("qualificationController.php");

$name= $_REQUEST['name'];

$natID = new nationalityC();
$add = new addressC();
$phone =  new contactinfoC();
$marital = new maritalC();
$teacher1 = new teacherC();
$teacher2= new teacherC();
$teacher3 = new teacherC();
$teacher4 = new teacherC();
$teacher5 = new teacherC();
$teacher6 = new teacherC();
$teacher7 = new teacherC();
$mstatus = new maritalC();
$qualValue = new qualvaluesC();
$qualifications = new qualificationC();

if(!empty($name))
{
    $ResultValue = mainC::Msearch($name);
}
foreach ($ResultValue as $Data){
    echo "<h1 align='left' id='h11'> <p><u>Teacher Application:</u></p> </h1>
    First name: 
          <input type='text' name='fname' value='".$Data['fname']."' required><br><br>
          Last name: 
          <input type='text' name='lname' value='".$Data['lname']."' required> <br><br>
          Social number:
          <input type='text' name='ssn' value='".$Data['ssn']."' required> <br><br> <hr>";

    $natRow = $teacher1->TselectV($Data['id']);
    foreach ($natRow as $nationality){
        $Teachnat = $natID->NAselectV($nationality['nationality']);
        foreach ($Teachnat as $nat){
            echo "Nationality: 
            <input name='nat' type='text' value='".$nat['name']."'><br><br>";
        }
    }

    $addRow = $teacher2->TselectV($Data['id']);
    foreach ($addRow as $addID) {
        $Paddress = $add->ADselectV($addID['address_id']);
        foreach ($Paddress as $addData) {
            echo "Home Address:
                <input type='text' name='address' value='".$addData['name']."' required><br><br>";
        }
    }
    $cellRow = $phone->CIselectV($Data['id']);
    foreach ($cellRow as $cellID) {
        echo "Phone number:
            <input type='text' name='mcellphone' value='".$cellID['cellphone']."'> <hr>";
    }
    $msRow = $teacher3->TselectV($Data['id']);
    foreach ($msRow as $maritalID) {
        $MARstatus = $mstatus->MTselectV($maritalID['mstatus_id']);
        foreach ($MARstatus as $status) {
            echo "Marital Status: 
                <input type='text' name='mstatus' value='".$status['value']."' required><br><br>";
        }
    }
    echo "<p>Qualifications with Dates:<br><br></p>";
    $qvRow = $teacher4->TselectV($Data['id']);
    foreach ($qvRow as $teacherID){
        $qualVrow = $qualValue->QVselectV($teacherID['id']);
        foreach ($qualVrow as $QV){
            $quals = $qualifications->QselectV($QV['qual_id']);
            foreach ($quals as $qualID){
                echo "Qualification Type: <input name='qualtype' type='text' value='".$qualID['name']."'> 
                    Qualification Info: <input name='qual' type='text' value='".$QV['value']."'><br><br>
                    Date of qualification: <input name='date_qual' type='text' value='".$QV['date']."'>";
            }
        }
    }
    $pempName = $teacher5->TselectV($Data['id']);
    foreach ($pempName as $pempnam){
        $addRow = $teacher6->TselectV($Data['id']);
        foreach ($addRow as $addID) {
            $Paddress = $add->ADselectV($addID['pempaddress_id']);
            foreach ($Paddress as $addData) {
                echo "Present Employer's Name: <input name='pempname' type='text' value='" . $pempnam['pempname'] . "'><br><br>
              Present Employer's Address: <input name='pempaddress_id' type='text' value='" . $addData['name'] . "'>
              <br><br>
              Present Employer's phone number: <input name='pempnum' type='text' value='" . $pempnam['pempnum'] . "'><br><br><hr>
        
              Current or Last Salary: <input name='corsalary' type='text' value='" . $pempnam['corlsalary'] . "'><br><br>
              Reqqested Salary: <input name='reqsalary' type='text' value='" . $pempnam['reqsalary'] . "'><br><br>
        
              Have you been interviewed recently at other nurseries? if yes, please mention names:<br><br>
              <input name='othernursery' type='text' value='" . $pempnam['othernursery'] . "'><br><br>
        
              In your point of view, how do you see an ideal nursery regarding its academic side?<br><br>
              <input name='povnursery' type='text' value='" . $pempnam['povnursery'] . "'></textarea><br>
              <br><br>
              <button type='submit' name='Updatebtn'>Modify Form</button>
              <button type='reset' name='teacherDelete' onclick='checkD()'>Delete Teacher</button>";
            }
        }
    }

}
?>