<?php
require_once("ParentController.php");
require_once("MainController.php");
require_once("ChildController.php");
require_once("AddressController.php");
require_once("MaritalController.php");
require_once("ContactinfoController.php");
require_once("EmergencyController.php");
require_once("attend_intController.php");
require_once("relationController.php");
require_once("WeekController.php");
require_once("BranchController.php");

$name= $_REQUEST['name'];
$father = new parentsC();
$mother = new parentsC();
$ParMS = new parentsC();
$add = new parentsC();
$dad = new mainC();
$mom = new mainC();
$mstatus = new maritalC();
$address = new addressC();
$fphone = new contactinfoC();
$mphone = new contactinfoC();
$emergency = new emergencyC();
$relative = new relationC();
$attendance = new Attend_intC();
$week =  new weekC();
$branch = new branchC();
$child = new ChildC();

if(!empty($name))
{
    $ResultValue = mainC::Msearch($name);
}
foreach ($ResultValue as $Data) {
    echo "<form action='MainController.php' method='post'>
           Applicaton number: <input type='number' name='child_id' disabled value='".$Data['id']."'><br><br>
            Child's First name: 
            <input type='text' name='cfname' value='".$Data['fname']."' required><br><br>
           Child's Last name: 
           <input type='text' name='clname' value='".$Data['lname']."' required> <br><br>
           Date of birth: <input type='date' name='dob' value='".$Data['dob']."' required><br><br>
           Child's Social number:
           <input type='text' name='cssn' value='".$Data['ssn']."' required> <br><br> <hr>";
    $FatherRow = $father->PselectParents($Data['id']);
    foreach ($FatherRow as $fData) {
        $dadRow = $dad->MselectV($fData['father_id']);
        echo "<input type='hidden' name='father_id' value='".$fData['father_id']."'>";
        foreach ($dadRow as $dadData) {
            echo "
            Father's name:
            <input type='text' name='ffname' value=' ".$dadData['fname']."' required>
            <input type='text' name='flname' value=' ".$dadData['lname']."' required><br><br>
            Father's social security number:
            <input type='text' name='fssn' value=' ".$dadData['ssn']."' required><br><br>
            Occupation: <input type='text' name='foccupation' value=' ".$fData['foccupation']."' required><br><br>";
            $fcellRow = $fphone->CIselectV($fData['father_id']);
            foreach ($fcellRow as $fcellID) {
                echo "
                Father's phone number: 
                <input type='text' name='fcellphone' value='".$fcellID['cellphone']."'><hr>";
            }
        }
    }
    $MotherRow = $mother->PselectParents($Data['id']);
    foreach ($MotherRow as $mData) {
        $momRow = $mom->MselectV($mData['mother_id']);
        echo "<input type='hidden' name='mother_id' value='".$mData['mother_id']."'>";
        foreach ($momRow as $momData) {
            echo "
            Mother's name:
            <input type='text' name='mfname' value=' ".$momData['fname']."' required>
            <input type='text' name='mlname' value=' ".$momData['lname']."' required><br><br>
            Mother's social security number:
            <input type='text' name='mssn' value=' ".$momData['ssn']."' required><br><br>
            Occupation: 
            <input type='text' name='moccupation'value=' ".$mData['moccupation']."' required><br><br>";
            $mcellRow = $mphone->CIselectV($mData['mother_id']);
            foreach ($mcellRow as $mcellID) {
                echo "
                Mother's phone number: 
                <input type='text' name='mcellphone' value='" .$mcellID['cellphone']. "'> <hr>";
            }
            $msRow = $ParMS->PselectParents($Data['id']);
            foreach ($msRow as $maritalID) {
                $MARstatus = $mstatus->MTselectV($maritalID['mstatus_id']);
                foreach ($MARstatus as $status) {
                    echo "Parents Are: 
                    <input type='text' name='mstatus_id' value=' " .$status['value']. "' required><br><br>";
                }
            }
            $addRow = $add->PselectParents($Data['id']);
            foreach ($addRow as $addID) {
                $Paddress = $address->ADselectV($addID['address_id']);
                foreach ($Paddress as $addData) {
                    echo "Home Address:
                    <input type='text' name='address_id' value=' ".$addData['name']."' required><br><br>";
                }
            }
            echo "Name of the person who will usually pick up the child:
			<input type='text' name='usualpickup' value=' " .$mData['usualpickup']. "' required><br><br>
			<hr>";
        }
        echo "<br> Requested for Attendance:
            <input type='text' name='days' value=' ".$attendRow = $attendance->ATselectV($Data['id'])."' required><br><br><hr>";
        $ERrow = $emergency->ERselectV($Data['id']);
        foreach ($ERrow as $ERid) {
            echo "<h1 align='center' id='oat'> Emergency contact </h1>
			Emergency Contact's Name:
			<input type='text' name='ecname' value='" .$ERid['ecname']. "' required><br><br>
			Emergency Contact's Address:
			<input type='text' name='ecaddress_id' value='" .$addData['name']. ":'><br><br>";
            $relativeRow = $relative->RselectV($ERid['relation_id']);
            foreach ($relativeRow as $relation) {
                echo "Relationship:
                 <input type='text' name='relation_id' value='".$relation['relation']. "' required><br><br>";
            }
            echo "Emergency Contact's Number:
			<input type='text' name='ecnum' value='" .$ERid['ecnum']. "' required><br><br>
			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:<br><br>
			<input name='extrainfo'  value='" .$ERid['extrainfo']. "' required><br><br>
			";
        }
        $brRow = $child->CHselectV($Data['id']);
        foreach ($brRow as $branchID){
            $branchname = $branch->BrselectV($branchID['branch_id']);
            foreach ($branchname as $brData){
                echo "Branch name: <input type='text' name='branch_id' value='".$brData['value']."'><br><br>   ";
            }
        }
    }
    echo "<button type='submit' name='childUpdate'>Modify Form</button>
            <button type='reset' name='Deletechild' onclick='checkD()'>Delete Child</button> </form>";

}
?>