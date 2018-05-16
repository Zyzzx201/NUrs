<?php
require_once("qualvaluesClass.php");
require_once("teacherClass.php");
require_once("valid.php");

$QualOBJ1 = new qualvalue();
$QualOBJ2 = new qualvalue();
$QualOBJ3 = new qualvalue();
$teacher = new teacher();
if (isset($_POST['Savebtn'])) {
    $_POST['qual1'] = valid::test_input($_POST['qual1']);
    $result = valid::isempty($_POST['qual1']);
    $QualOBJ1->value = $_POST['qual1'];
    $QualOBJ1->date = $_POST['date_qual1'];

    $QualOBJ1->insert();

    $_POST['qual1'] = valid::test_input($_POST['qual2']);
    $result = valid::isempty($_POST['qual2']);
    $QualOBJ2->value = $_POST['qual2'];
    $QualOBJ2->date = $_POST['date_qual2'];

    $QualOBJ2->insert();

    $_POST['qual1'] = valid::test_input($_POST['qual3']);
    $result = valid::isempty($_POST['qual3']);
    $QualOBJ3->value = $_POST['qual3'];
    $QualOBJ3->date = $_POST['date_qual3'];

    $QualOBJ3->insert();


    header('location:addteacher.php');
}

class qualvaluesC
{
    public function QVselectV($id)
    {
        $Qualobj1 = new qualvalue();
        $Qualobj1->teacher_id = $id;
        $Qualrow1 = $Qualobj1->select();
        return $Qualrow1;
    }
}