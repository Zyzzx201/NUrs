<?php
require_once("MainClass.php");
require_once("ParentClass.php");
require_once("ChildClass.php");
require_once("attend_intClass.php");
require_once("ContactinfoClass.php");
require_once("EmergencyClass.php");
require_once("AddressController.php");
require_once("MaritalController.php");
require_once("ChildController.php");
require_once("WeekController.php");
require_once("valid.php");
require_once("nationalityController.php");
require_once("teacherClass.php");
require_once("teacherController.php");
require_once("qualificationController.php");
require_once("qualvaluesClass.php");


$teachData =  new main();
$teacherCell = new contactinfo();
$main = new mainC();
$add = new addressC();
$marital = new maritalC();
$teacher = new teacher();
$TEACH = new teacherC();
$qualValues1 = new qualvalue();
$qualifications1 = new qualificationC();
$qualValues2 = new qualvalue();
$qualifications2 = new qualificationC();
$qualValues3 = new qualvalue();
$qualifications3 = new qualificationC();
$nationality = new nationalityC();


if (isset($_POST['Savebtn'])){
    $teachData->fname = $_POST['fname'];
    $teachData->lname = $_POST['lname'];
    $teachData->dob = $_POST['dob'];
    $teachData->ssn = $_POST['ssn'];
    $teachData->status_id = 3;
    $teachData->utype = 2;

    $teachData->insert();
    $result = $main->MselectSSn($_POST['ssn']);
    $teacher_id = mysqli_fetch_array($result);
    //echo "teacher id--". $teacher_id['id']."<br>";
    $teacher->main_id = $teacher_id['id'];

    $result = $marital->MTselectID($_POST['mstatus_id']);
    $marStatus = mysqli_fetch_assoc($result);
    //echo "mstatus id: ".$marStatus['id']."<br>";
    $teacher->mstatus_id = $marStatus['id'];

    $result = $add->ADselectID($_POST['address_id']);
    $address = mysqli_fetch_assoc($result);
    $teacher->address_id = $address['id'];
    //echo "address id: ".$address['id']."<br>";


    $result = $nationality->NAselectID($_POST['nat']);
    $nat = mysqli_fetch_assoc($result);
    $teacher->nationality = $nat['id'];
    //echo "nationality id: ".$nat['id']."<br>";

    $teacher->pempname = $_POST['pempname'];
    $teacher->pempnum = $_POST['pempnum'];

    $result = $add->ADselectID($_POST['pempaddress_id']);
    $PEaddress = mysqli_fetch_assoc($result);
    //echo "pmep address id: ".$PEaddress['id']."<br>";
    $teacher->pempaddress_id = $PEaddress['id'];

    $teacher->corsalary = $_POST['corsalary'];
    $teacher->reqsalary = $_POST['reqsalary'];
    $teacher->othernursery = $_POST['othernursery'];
    $teacher->povnursery = $_POST['povnursery'];

    $teacher->insert();

    $result = $TEACH->TselectID($teacher_id['id']);
    $row = mysqli_fetch_assoc($result);
    //echo "main_id: ".$row['id']."<br>";
    $main_id = $row['id'];


    $qualValues1->qual_id = $_POST['qualification_id1'];
    $qualValues1->teacher_id = $main_id;
    $qualValues1->value = $_POST['qual1'];
    $qualValues1->date = $_POST['date_qual1'];
    $qualValues1->insert();

    $qualValues2->qual_id = $_POST['qualification_id2'];
    $qualValues2->teacher_id = $main_id;
    $qualValues2->value = $_POST['qual2'];
    $qualValues2->date = $_POST['date_qual2'];
    $qualValues2->insert();

    $qualValues3->qual_id = $_POST['qualification_id3'];
    $qualValues3->teacher_id = $main_id;
    $qualValues3->value = $_POST['qual3'];
    $qualValues3->date = $_POST['date_qual3'];
    $qualValues3->insert();

    $teacherCell->main_id = $teacher_id['id'];
    $teacherCell->cellphone = $_POST['cellphone'];
    $teacherCell->insert();

  header('location:addteacher(US).php');
}


$child = new main();
$father = new main();
$mother =  new main();
$parents = new parents();
$fatherCell = new contactinfo();
$motherCell = new contactinfo();
$childData =  new user();
$attendance = new Attend_int();
$emergency = new emergency();
$main = new mainC();
$main2 = new mainC();
$main3 = new mainC();
$add = new addressC();
$marital = new maritalC();
$Id_child = new ChildC();
$attendID = new weekC();


if (isset($_POST['childSave'])) {
    $child->fname = $_POST['cfname'];
    $child->lname = $_POST['clname'];
    $child->dob = $_POST['dob'];
    $child->ssn = $_POST['cssn'];
    $child->status_id = 3;
    $child->utype = 2;

    $child->insert();
    $result = $main->MselectSSn($_POST['cssn']);
    $child_id = mysqli_fetch_array($result);
//    echo "child id--" . $child_id['id'] . "<br>";

    $father->fname = $_POST['ffname'];
    $father->lname = $_POST['flname'];
    $father->ssn = $_POST['fssn'];
    $father->status_id = 3;
    $father->utype = 2;

    $father_id = $father->insert();
    $result = $main2->MselectSSn($_POST['fssn']);
    $father_id = mysqli_fetch_array($result);
//    echo "<br>father id--" . $father_id['id'] . "<br>";

    $mother->fname = $_POST['mfname'];
    $mother->lname = $_POST['mlname'];
    $mother->ssn = $_POST['mssn'];
    $mother->status_id = 3;
    $mother->utype = 2;

    $mother_id = $mother->insert();
    $result = $main3->MselectSSn($_POST['mssn']);
    $mother_id = mysqli_fetch_array($result);
//    echo "<br>mother id--" . $mother_id['id'] . "<br>";

    $parents->child_id = $child_id['id'];
    $parents->mother_id = $mother_id['id'];
    $parents->father_id = $father_id['id'];
    $parents->ffbook = $_POST['ffbook'];
    $parents->foccupation = $_POST['foccupation'];
    $parents->mfbook = $_POST['mfbook'];
    $parents->moccupation = $_POST['moccupation'];
    $result = $marital->MTselectID($_POST['mstatus_id']);
    $marStatus = mysqli_fetch_assoc($result);
//    echo "mstatus id: " . $marStatus['id'] . "<br>";
    $parents->mstatus_id = $marStatus['id'];

    $result = $add->ADselectID($_POST['address_id']);
    $address = mysqli_fetch_assoc($result);
    $parents->address_id = $address['id'];
//    echo "address id: " . $address['id'] . "<br>";

    $parents->usualpickup = $_POST['usualpickup'];
    $parents->insert();

    $fatherCell->main_id = $father_id['id'];
    $fatherCell->cellphone = $_POST['fcellphone'];
    $fatherCell->insert();

    $motherCell->main_id = $mother_id['id'];
    $motherCell->cellphone = $_POST['mcellphone'];
    $motherCell->insert();


    $childData->main_id = $child_id['id'];
    $childData->ddoe = $_POST['ddoe'];
    $childData->branch_id = $_POST['branch_id'];
    $childData->insert(); #dh eli gai mn el child table

    $result = $Id_child->CHselectID($child_id['id']);
    $IDchild = mysqli_fetch_assoc($result);
//    echo "from child id: " . $IDchild['id'] . "<br>";
    $attendance->child_id = $IDchild['id'];

    $result = $attendID->WselectID($_POST['days']);
    $attend_ID = mysqli_fetch_assoc($result);
//    echo "attendance id: " . $attend_ID['id'] . "<br>";
    $attendance->week_id = $attend_ID['id'];
    $attendance->insert();

    $emergency->main_id = $child_id['id'];
//echo $emergency->main_id;
    $emergency->ecname = $_POST['ecname'];
    $emergency->ecnum = $_POST['ecnum'];

    $result = $add->ADselectID($_POST['ecaddress_id']);
    $ERaddress = mysqli_fetch_assoc($result);
    echo "ERaddress id: " . $ERaddress['id'] . "<br>";
    $emergency->ecaddress_id = $ERaddress['id'];

    $emergency->relation_id = $_POST['relation_id'];
//echo $emergency->relation_id;
    $emergency->extrainfo = $_POST['extrainfo'];
    $emergency->insert();
     header('location:Onlineapplication(US).php');
//  return $result;
}
    if (isset($_POST['childUpdate'])) {
        $child->fname = $_POST['cfname'];
        $child->lname = $_POST['clname'];
        $child->dob = $_POST['dob'];
        $child->ssn = $_POST['cssn'];
        $child->status_id = 3;
        $child->utype = 2;

        $child->update();
        $result = $main->MselectSSn($_POST['cssn']);
        $child_id = mysqli_fetch_array($result);
//    echo "child id--" . $child_id['id'] . "<br>";

        $father->fname = $_POST['ffname'];
        $father->lname = $_POST['flname'];
        $father->ssn = $_POST['fssn'];
        $father->dob = '';
        $father->status_id = 3;
        $father->utype = 2;

        $father->update();
        $result = $main2->MselectSSn($_POST['fssn']);
        $father_id = mysqli_fetch_array($result);
//    echo "<br>father id--" . $father_id['id'] . "<br>";

        $mother->fname = $_POST['mfname'];
        $mother->lname = $_POST['mlname'];
        $mother->ssn = $_POST['mssn'];
        $mother->dob = '';
        $mother->status_id = 3;
        $mother->utype = 2;

        $mother->update();
        $result = $main3->MselectSSn($_POST['mssn']);
        $mother_id = mysqli_fetch_array($result);
//    echo "<br>mother id--" . $mother_id['id'] . "<br>";

        $parents->child_id = $child_id['id'];
        $parents->mother_id = $mother_id['id'];
        $parents->father_id = $father_id['id'];
        $parents->ffbook = $_POST['ffbook'];
        $parents->foccupation = $_POST['foccupation'];
        $parents->mfbook = $_POST['mfbook'];
        $parents->moccupation = $_POST['moccupation'];
        $result = $marital->MTselectID($_POST['mstatus_id']);
        $marStatus = mysqli_fetch_assoc($result);
//    echo "mstatus id: " . $marStatus['id'] . "<br>";
        $parents->mstatus_id = $marStatus['id'];

        $result = $add->ADselectID($_POST['address_id']);
        $address = mysqli_fetch_assoc($result);
        $parents->address_id = $address['id'];
//    echo "address id: " . $address['id'] . "<br>";

        $parents->usualpickup = $_POST['usualpickup'];
        $parents->update();

        $fatherCell->main_id = $father_id['id'];
        $fatherCell->cellphone = $_POST['fcellphone'];
        $fatherCell->update();

        $motherCell->main_id = $mother_id['id'];
        $motherCell->cellphone = $_POST['mcellphone'];
        $motherCell->update();


        $childData->main_id = $child_id['id'];
        $childData->ddoe = $_POST['ddoe'];
        $childData->branch_id = $_POST['branch_id'];
        $childData->update(); #dh eli gai mn el child table

        $result = $Id_child->CHselectID($child_id['id']);
        $IDchild = mysqli_fetch_assoc($result);
//    echo "from child id: " . $IDchild['id'] . "<br>";
        $attendance->child_id = $IDchild['id'];

        $result = $attendID->WselectID($_POST['days']);
        $attend_ID = mysqli_fetch_assoc($result);
//    echo "attendance id: " . $attend_ID['id'] . "<br>";
        $attendance->week_id = $attend_ID['id'];
        $attendance->update();

        $emergency->main_id = $child_id['id'];
//echo $emergency->main_id;
        $emergency->ecname = $_POST['ecname'];
        $emergency->ecnum = $_POST['ecnum'];

        $result = $add->ADselectID($_POST['ecaddress_id']);
        $ERaddress = mysqli_fetch_assoc($result);
        //echo "ERaddress id: " . $ERaddress['id'] . "<br>";
        $emergency->ecaddress_id = $ERaddress['id'];

        $emergency->relation_id = $_POST['relation_id'];
//echo $emergency->relation_id;
        $emergency->extrainfo = $_POST['extrainfo'];
        $emergency->update();
        header('location:editchild(AS).php');
    }

    $mainOBJ5 = new main();
    if (isset($_POST['Updatebtn'])) {
        $mainOBJ5->utype = 2;
        $mainOBJ5->status_id = 1;

        $_POST['fname'] = valid::test_input($_POST['fname']);
        $result = valid::isempty($_POST['fname']);
        $result = valid::onlyletters($_POST['fname']);
        $mainOBJ5->fname = $_POST['fname'];

        $_POST['lname'] = valid::test_input($_POST['lname']);
        $result = valid::isempty($_POST['lname']);
        $result = valid::onlyletters($_POST['lname']);
        $mainOBJ5->lname = $_POST['lname'];

        $_POST['dob'] = valid::test_input($_POST['dob']);
        $result = valid::isempty($_POST['dob']);
        $result = valid::numbersonly($_POST['dob']);
        $mainOBJ5->dob = $_POST['dob'];

        $_POST['ssn'] = valid::test_input($_POST['ssn']);
        $result = valid::isempty($_POST['ssn']);
        $result = valid::numbersonly($_POST['ssn']);
        $result = valid::verifylength($_POST['ssn'], 14, 14);
        $mainOBJ5->ssn = $_POST['ssn'];
        $mainOBJ5->update();
        header('location:editteacher(AS).php');
    }

    $ChildOBJ1 = new main();
    if (isset($_POST['Deletechild'])) {
        $ChildOBJ1->delete();
        header('location:editchild(AS).php');
    }
    $mainOBJ7 = new main();
    if (isset($_POST['teacherDelete'])) {
        $mainOBJ7->delete();
        header('location:editteacher(AS).php');
    }

    class mainC
    {
        public function MselectV($id)
        {
            $Mobj1 = new main();
            $Mobj1->id = $id;
            $Mrow1 = $Mobj1->select();
            return $Mrow1;
        }

        public function MselectTeacher($id)
        {
            $Mobj1 = new main();
            $Mobj1->status_id = $id;
            $Mrow1 = $Mobj1->selectAll();
            $teacher = new teacherC();
            foreach ($Mrow1 as $mainR) {
                $TeachRow = $teacher->TselectV($mainR['id']);
                foreach ($TeachRow as $result)
                    while ($result['main_id'] == $mainR['id'])
                        return $Mrow1;

            }

        }

        public function MselectChild($id)
        {
            $Mobj1 = new main();
            $Mobj1->status_id = $id;
            $Mrow1 = $Mobj1->selectAll();
            $child = new parentsC();
            foreach ($Mrow1 as $mainR) {
                $childRow = $child->PselectV($mainR['id']);
                foreach ($childRow as $result)
                    while ($result['child_id'] == $mainR['id'])
                        return $Mrow1;
            }


        }

        public function Msearch($searchname)
        {
            $Mobj2 = new main();
            $Mobj2->searchname = $searchname;
            $Mrow2 = $Mobj2->search();
            return $Mrow2;
        }

        public function MselectSSn($ssn)
        {
            $main = new main();
            $main->ssn = $ssn;
            $row = $main->selectSSN();
            return $row;
        }
}



 ?>
