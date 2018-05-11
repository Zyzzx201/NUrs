<?php
require_once("qualificationClass.php");
require_once("valid.php");

$QualOBJ1 = new qualification();
if (isset($_POST['saveQual'])) {
    $_POST['Qualname'] = valid::test_input($_POST['Qualname']);
    $result = valid::isempty($_POST['Qualname']);
    $result = valid::onlyletters($_POST['Qualname']);
    $QualOBJ1->name = $_POST['Qualname'];

    $QualOBJ1->insert();
    header('location:EditDB.php');
}

$QualOBJ3 = new qualification();
if (isset($_POST['updateQual'])) {
    $_POST['QualUid'] = valid::test_input($_POST['QualUid']);
    $result = valid::numbersonly($_POST['QualUid']);
    $QualOBJ3->id = $_POST['QualUid'];

    $_POST['newQual'] = valid::test_input($_POST['newQual']);
    $result = valid::isempty($_POST['newQual']);
    $result = valid::onlyletters($_POST['newQual']);
    $QualOBJ3->name = $_POST['newQual'];

    $QualOBJ3->update();
    header('location:EditDB.php');
}

$QualOBJ2 = new qualification();
if (isset($_POST['deleteQual'])) {
    $_POST['Qualid'] = valid::test_input($_POST['Qualid']);
    $result = valid::numbersonly($_POST['Qualid']);
    $QualOBJ2->id = $_POST['Qualid'];
    $QualOBJ2->delete();
    header('location:EditDB.php');
}

class qualificationC {
    public function QselectV($id)
    {
        $Qualobj1 = new qualification();
        $Qualobj1->id=$id;
        $Qualrow1 = $Qualobj1->select();
        return $Qualrow1;
    }

    public function QselectALL()
    {
        $Qualobj2 = new qualification();
        $Qualrow2 = $Qualobj2->selectAll();
        while ($row = mysqli_fetch_assoc($Qualrow2)){
            echo $row['id'];
            echo " - ";
            echo $row['name'];
            echo "<br>";
        }
    }
}



?>