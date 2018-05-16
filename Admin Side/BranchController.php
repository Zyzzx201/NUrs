<?php
require_once("BranchClass.php");
require_once("valid.php");

$BranchOBJ1 = new branch();
if (isset($_POST['childSave'])) {
    $_POST['branches'] = valid::test_input($_POST['branches']);
    $result = valid::isempty($_POST['branches']);
    $BranchOBJ1->value = $_POST['branches'];

    $BranchOBJ1->insert();
    header('location:Onlineapplication(US).php');
}
$BranchOBJ2 = new branch();
if (isset($_POST['Savebtn'])) {
    $_POST['branches'] = valid::test_input($_POST['branches']);
    $result = valid::isempty($_POST['branches']);
    $BranchOBJ2->value = $_POST['branches'];

    $BranchOBJ2->insert();
    header('location:addteacher(US).php');
}

$BranchOBJ3 = new branch();
if (isset($_POST['saveBranch'])) {
    $_POST['branchAdd'] = valid::test_input($_POST['branchAdd']);
    $result = valid::isempty($_POST['branchAdd']);
    $result = valid::onlyletters($_POST['branchAdd']);
    $BranchOBJ3->value = $_POST['branchAdd'];

    $BranchOBJ3->insert();
    header('location:EditDB.php');
}

$BranchOBJ4 = new branch();
if (isset($_POST['updateBranch'])) {
    $_POST['BranchUid'] = valid::test_input($_POST['BranchUid']);
    $result = valid::numbersonly($_POST['BranchUid']);
    $BranchOBJ4->id = $_POST['BranchUid'];

    $_POST['newBranch'] = valid::test_input($_POST['newBranch']);
    $result = valid::isempty($_POST['newBranch']);
//    $result = valid::onlyletters($_POST['newBranch']);
    $BranchOBJ4->value = $_POST['newBranch'];

    $BranchOBJ4->update();
    header('location:EditDB.php');
}

$BranchOBJ5 = new branch();
if (isset($_POST['deleteBranch'])) {
    $_POST['Branchid'] = valid::test_input($_POST['Branchid']);
    $result = valid::numbersonly($_POST['Branchid']);
    $BranchOBJ5->id = $_POST['Branchid'];
    $BranchOBJ5->delete();
    header('location:EditDB.php');
}

class branchC {
    public function BrselectV($id)
    {
        $Branchobj1 = new branch();
        $Branchobj1->id=$id;
        $Branchrow1 = $Branchobj1->select();
        return $Branchrow1;
    }

    public function BrselectALL()
    {
        $Branchobj2 = new branch();
        $Branchrow2 = $Branchobj2->selectAll();
        while ($row = mysqli_fetch_assoc($Branchrow2)){
            echo $row['id'];
            echo " - ";
            echo $row['value'];
            echo "<br>";
        }
    }
}



?>